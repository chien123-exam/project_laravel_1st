<?php

namespace App\Repositories;

use App\Models\Course;
use Illuminate\Support\Facades\Schema;

class CourseRepository extends BaseRepository
{
    public function __construct(Course $course)
    {
        $this->model = $course;
    }

    public function getCourses(array $input = [])
    {
        // Bắt đầu với một truy vấn cơ sở dữ liệu dựa trên model Course
        $query = $this->model->query();

        // Xử lý các điều kiện tìm kiếm hoặc sắp xếp nếu có
        if (!empty($input['search'])) {
            $query->where('name', 'like', '%' . $input['search'] . '%');
        }

        if (!empty($input['sort'])) {
            // Xử lý sắp xếp dựa trên các cột cụ thể
            $sortColumn = $input['sort'];
            if (Schema::hasColumn($this->model->getTable(), $sortColumn)) {
                $query->orderBy($sortColumn, $input['order'] ?? 'asc');
            }
        }

        // Sử dụng paginate để lấy danh sách khoá học
        return $query->paginate($input['perPage'] ?? 10);
    }
}


?>
