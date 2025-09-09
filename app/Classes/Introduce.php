<?php
namespace App\Classes;

class Introduce{

    public function config(){
        $data['block_1'] = [
            'label' => 'Khối 1',
            'description' => 'Cài đặt đầy đủ thông tin khối dưới đây',
            'value' => [
                'title' => ['type' => 'text', 'label' => 'Tiêu đề khối'],
                'description' => ['type' => 'textarea', 'label' => 'Mô tả khối'],
                'background' => ['type' => 'images', 'label' => 'Ảnh Nền'],
            ]
        ];
        $data['block_2'] = [
            'label' => 'Khối 3',
            'description' => 'Cài đặt đầy đủ thông tin khối dưới đây',
            'value' => [
                'title' => ['type' => 'text', 'label' => 'Tiêu đề khối'],
                'description' => ['type' => 'textarea', 'label' => 'Mô tả khối'],
                'background' => ['type' => 'images', 'label' => 'Ảnh Nền'],
                'title_1' => ['type' => 'text', 'label' => 'Tầm nhìn'],
                'description_1' => ['type' => 'text', 'label' => 'Mô tả Tầm nhìn'],
                'image_1' => ['type' => 'images', 'label' => 'Hình Ảnh Tầm nhìn'],
                'title_2' => ['type' => 'text', 'label' => 'Sứ Mệnh'],
                'description_2' => ['type' => 'text', 'label' => 'Mô tả Sứ Mệnh'],
                'image_2' => ['type' => 'images', 'label' => 'Hình Ảnh Sứ mệnh'],
                'skill_1_title' => ['type' => 'text', 'label' => 'Tiêu đề skill 1'],
                'skill_1_percent' => ['type' => 'text', 'label' => '%'],
                'skill_1_description' => ['type' => 'text', 'label' => 'Mô tả skill 1'],
                'skill_2_title' => ['type' => 'text', 'label' => 'Tiêu đề skill 2'],
                'skill_2_percent' => ['type' => 'text', 'label' => '%'],
                'skill_2_description' => ['type' => 'text', 'label' => 'Mô tả skill 2'],
                'skill_3_title' => ['type' => 'text', 'label' => 'Tiêu đề skill 3'],
                'skill_3_percent' => ['type' => 'text', 'label' => '%'],
                'skill_3_description' => ['type' => 'text', 'label' => 'Mô tả skill 3'],
            ]
        ];
        $data['block_3'] = [
            'label' => 'Khối 4',
            'description' => 'Cài đặt đầy đủ thông tin khối dưới đây',
            'value' => [
                'title' => ['type' => 'text', 'label' => 'Tiêu đề khối'],
                'description' => ['type' => 'textarea', 'label' => 'Mô tả khối'],
            ]
        ];
        
        return $data;
    }
	
}
