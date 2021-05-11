<?php
namespace App\Services;

use App\Models\Category;

class CategoryService
{
    /**
     * @param null $parentId 子类目的父类目id， null 代表获取所有根类目
     * @param null $allCategories 数据库中所有的类目，null 代表需要从数据库查询
     */
    public function getCategoryTree($parentId = null, $allCategories = null)
    {
        if (is_null($allCategories)) {
            // 从数据库中一次性取出所有类目
            $allCategories = Category::all();
        }

        return $allCategories
            // 从所有类目中挑选出父类目 ID 为 $parentId 的类目
            ->where('parent_id', $parentId)
            ->map(function (Category $category) use ($allCategories) {
                $data = ['id' => $category->id, 'name' => $category->name];
                if (!$category->is_directory) {
                    return $data;
                }
                $data['children'] = $this->getCategoryTree($category->id, $allCategories);

                return $data;
            });
    }
}
