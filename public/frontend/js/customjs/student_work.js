var StudentWork= function () {
    var studentWorkDetails = function () {
        document.querySelectorAll('.filter-button').forEach(button => {
            button.addEventListener('click', () => {
                const filter = button.dataset.filter;
                document.querySelectorAll('.filter-button').forEach(btn => {
                    btn.classList.remove('active');
                });
                button.classList.add('active');
                document.querySelectorAll('.gallery-item').forEach(item => {
                    if (filter === 'all' || item.dataset.category === filter) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });
    }
    return {
        init: function () {
            studentWorkDetails();
        }
    }
}();
