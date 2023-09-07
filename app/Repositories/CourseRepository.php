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

    public function getCoursesByUserId($userId, array $input = [])
    {
        // Bắt đầu với một truy vấn cơ sở dữ liệu dựa trên model Course
        $query = $this->model->query();

        // Truy vấn theo user_id
        $query->whereHas('users', function ($userQuery) use ($userId) {
            $userQuery->where('user_id', $userId);
        });

        if (! empty($input['perPage'])) {
            return $query->paginate($input['perPage']);
        }

        return $query->get();
    }

}


?>
