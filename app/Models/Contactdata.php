<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contactdata extends Model
{
    use HasFactory;
    protected $table= "contact_data";

    public function getdatatable()
    {
        $requestData = $_REQUEST;
        $columns = array(
            0 => 'contact_data.id',
            1 => 'contact_data.name',
            2 => 'contact_data.email',
            3 => 'contact_data.subject',
            4 => 'contact_data.message',
        );
        $query = Contactdata ::from('contact_data');


        if (!empty($requestData['search']['value'])) {   // if there is a search parameter, $requestData['search']['value'] contains search parameter
            $searchVal = $requestData['search']['value'];
            $query->where(function($query) use ($columns, $searchVal, $requestData) {
                $flag = 0;
                foreach ($columns as $key => $value) {
                    $searchVal = $requestData['search']['value'];
                    if ($requestData['columns'][$key]['searchable'] == 'true') {
                        if ($flag == 0) {
                            $query->where($value, 'like', '%' . $searchVal . '%');
                            $flag = $flag + 1;
                        } else {
                            $query->orWhere($value, 'like', '%' . $searchVal . '%');
                        }
                    }
                }
            });
        }

        $temp = $query->orderBy($columns[$requestData['order'][0]['column']], $requestData['order'][0]['dir']);

        $totalData = count($temp->get());
        $totalFiltered = count($temp->get());

        $resultArr = $query->skip($requestData['start'])
                    ->take($requestData['length'])
                    ->select('contact_data.id','contact_data.name','contact_data.email','contact_data.subject','contact_data.message',)
                    ->get();

        $data = array();
        $i = 0;

        foreach ($resultArr as $row) {
            $actionhtml  = '';
            $actionhtml .= '<a href=""data-toggle="modal" data-target="#contact-data-view" data-id="'.$row['id'].'" class="btn btn-icon contact-data-view"><i class="fa fa-eye text-primary"> </i></a>';
            $actionhtml .= '<a href="#" data-toggle="modal" data-target="#deleteModel" class="btn btn-icon  delete-records" data-id="' . $row["id"] . '" ><i class="fa fa-trash text-danger" ></i></a>';
            $i++;
            $nestedData = array();
            $nestedData[] = $i;
            $nestedData[] = $row['name'];
            $nestedData[] = $row['email'];
            $nestedData[] = $row['subject'];
            $nestedData[] = $row['message'] ?? '-';
            $nestedData[] = $actionhtml;
            $data[] = $nestedData;
        }
        $json_data = array(
            "draw" => intval($requestData['draw']), // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw.
            "recordsTotal" => intval($totalData), // total number of records
            "recordsFiltered" => intval($totalFiltered), // total number of records after searching, if there is no searching then totalFiltered = totalData
            "data" => $data   // total data array
        );
        return $json_data;
    }

    public function saveAdd($requestData){
        $checkUsersMail = Contactdata::where('contact_data.email', $requestData['email'])->count();
            if($checkUsersMail == 0){
                $objContactdata = new Contactdata();
                $objContactdata->name = $requestData['name'];
                $objContactdata->email = $requestData['email'];
                $objContactdata->subject  = $requestData['subject'];
                $objContactdata->message  = $requestData['message'];
                $objContactdata->created_at = date('Y-m-d H:i:s');
                $objContactdata->updated_at = date('Y-m-d H:i:s');
                if($objContactdata->save()){
                    return 'added';
                }else{
                    return 'wrong';
                }
            }
        return 'user_mail_exists';
    }

    public function get_contact_data_details($contactDataId){
        return Contactdata::from('contact_data')
                ->where("contact_data.id", $contactDataId)
                ->select( 'contact_data.id','contact_data.name','contact_data.email','contact_data.subject','contact_data.message')
                ->first();
    }

    public function common_activity($requestData){

        $result = Contactdata::where('id', $requestData['id'])->delete();
        if($result){
            return true;
        }else{
            return false ;
        }
    }


    public function get_admin_contact_data_details(){
        return Contactdata::from('contact_data')
        ->select( 'contact_data.id','contact_data.name','contact_data.email','contact_data.subject','contact_data.message')
        ->get();
    }
}
