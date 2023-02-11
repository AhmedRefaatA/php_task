<?php

namespace App\Models;

use App\Enums\TaskStatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'status',
        'department_id'
    ];

    protected $casts = [
        'type' => TaskStatusEnum::class,
    ];

    public function department(){
        return $this->belongsTo(Department::class);
    }

    public function employees(){
        return $this->belongsToMany(Employee::class, 'employee_tasks');
    }
}
