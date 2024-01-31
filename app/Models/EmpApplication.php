<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use File;

class EmpApplication extends Model
{
    use HasFactory;

    protected $table = "emp_application";

    public function getdatatable()
    {
        $requestData = $_REQUEST;
        $columns = array(
            0 => 'emp_application.id',
            1 => 'emp_application.full_name',
            2 => 'emp_application.email',
            3 => 'emp_application.designation',
            4 => 'emp_application.phone_number',
            5 => 'emp_application.note',
        );
        $query = EmpApplication::from('emp_application');


        if (!empty($requestData['search']['value'])) {   // if there is a search parameter, $requestData['search']['value'] contains search parameter
            $searchVal = $requestData['search']['value'];
            $query->where(function ($query) use ($columns, $searchVal, $requestData) {
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
            ->select('emp_application.id', 'emp_application.full_name', 'emp_application.email', 'emp_application.designation', 'emp_application.phone_number', 'emp_application.note',)
            ->get();

        $data = array();
        $i = 0;

        foreach ($resultArr as $row) {
            $actionhtml  = '';
            $actionhtml .= '<a href=""data-toggle="modal" data-target="#emp-application-view" data-id="' . $row['id'] . '" class="btn btn-icon emp-application-view"><i class="fa fa-eye text-primary"> </i></a>';
            $actionhtml .= '<a href="#" data-toggle="modal" data-target="#deleteModel" class="btn btn-icon  delete-records" data-id="' . $row["id"] . '" ><i class="fa fa-trash text-danger" ></i></a>';
            $i++;
            $nestedData = array();
            $nestedData[] = $i;
            $nestedData[] = $row['full_name'];
            $nestedData[] = $row['email'];
            $nestedData[] = $row['designation'];
            $nestedData[] = $row['phone_number'];
            $nestedData[] = $row['note'] ?? '-';
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

    public function saveAdd($requestData)
    {
        $checkEmployeeMail = EmpApplication::where('emp_application.email', $requestData['email'])->count();
        if ($checkEmployeeMail == 0) {
            $objEmpApplication = new EmpApplication();
            $objEmpApplication->full_name = $requestData['full_name'];
            $objEmpApplication->email = $requestData['email'];
            $objEmpApplication->designation  = $requestData['designation'];
            $objEmpApplication->phone_number  = $requestData['phone_number'];
            if ($requestData->hasFile('resume') && $requestData->file('resume')->isValid()) {
                $resumeImg = time() . '.' . $requestData['resume']->extension();
                $requestData['resume']->move(public_path('emp_application'), $resumeImg);
            }
            $objEmpApplication->resume = $resumeImg ?? '-';
            $objEmpApplication->note  = $requestData['note'] ?? '-';
            $objEmpApplication->created_at = date('Y-m-d H:i:s');
            $objEmpApplication->updated_at = date('Y-m-d H:i:s');
            if ($objEmpApplication->save()) {
                return 'added';
            } else {
                return 'wrong';
            }
        }
        return 'employee_mail_exists';
    }

    public function get_emp_application_details($empAppId)
    {
        return EmpApplication::from('emp_application')
            ->where("emp_application.id", $empAppId)
            ->select('emp_application.id', 'emp_application.full_name', 'emp_application.email', 'emp_application.designation', 'emp_application.phone_number', 'emp_application.note',)
            ->first();
    }

    public function common_activity($requestData)
    {
        $result = EmpApplication::where('id', $requestData['id'])->first();
        $oldPath = public_path('emp_application/' . $result->resume);
        if (File::exists($oldPath)) {
            unlink($oldPath);
        }
        $result->delete();

        if ($result) {
            return true;
        } else {
            return false;
        }
    }


    public function get_admin_contact_data_details()
    {
        return Contactdata::from('contact_data')
        ->select('contact_data.id', 'contact_data.name', 'contact_data.email', 'contact_data.subject', 'contact_data.message')
        ->get();
    }
}
