<?php

namespace App\Controllers;

use App\Models\MainModel;
use App\Libraries\Zainlayout;
use Config\Services;

class Courses extends BaseController
{
    public function index()
    {
        $main_model = new MainModel();
        $pager = Services::pager();
        $data = [];

        $zainlayout = new Zainlayout();
        $search = $this->request->getGet('search');
        $categoriesId = $this->request->getGet('categories');
        $limit = 12;
        $page = $this->request->getGet('page') ?? 1;
        $offset = ($page * $limit) - $limit;

        $count_all_courses = $main_model->get_count_courses($search, $categoriesId);
        $data['courses'] = $main_model->get_courses_all('', $search, $categoriesId, $limit, $offset);
        $data['paging'] = $pager->makeLinks($page, $limit, $count_all_courses[0]['total'], 'bootstrap_pagination');
        $data['categories'] = $main_model->get_categories_product();

        return $zainlayout->render('pages/courses', $data);
    }
}

