<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function index() {
        $titlesAndIds = [
            [ // القسم الرئيسي 
              //العنوان الرئيسي للقسم
              'title' => 'تقييم الاكاديمي',
              //  القيم التي ستظهر تحت القسم
              'values' => [
                [
                  'title' => 'المقررات الدراسية',
                  'id' => 'Lectures'
                ],
                [
                  'title' => 'المحاضرات',
                  'id' => 'TeachingStaff'
                ],
                [
                  'title' => ' طاقم التدريس',
                  'id' => 'Courses'
                ]
              ]
            ],
            [
              'title' => 'تقييم خدمي',
              'values' => [
                [
                  'title' => 'الامن',
                  'id' => 'security_services'
                ],
                [
                  'title' => 'الاستجابه لاحتياجات الطلاب',
                  'id' => 'responding-students'
                ],
                [
                  'title' => 'تنسيق نزولات ميدانيه للتدريب',
                  'id' => 'coordinating-field-trips-training'
                ],
                [
                  'title' => 'تاهيل الطلاب لسوق العمل',
                  'id' => 'preparing-students-labor-market'
                ]
              ]
            ],
            [
              //العنوان الرئيسي للقسم
              'title' => 'تقييم مالي',
              //  القيم التي ستظهر تحت القسم
              'values' => [
                [
                  'title' => 'الرسوم$',
                  'id' => 'inancialcharges'
                ]
              ]
            ],
            [
              'title' => 'تقييم الانشطه',
              'values' => [
                [
                  'title' => 'الرحلات',
                  'id' => 'trips'
                ],
                [
                  'title' => 'المسابقات',
                  'id' => 'contests'
                ],
                [
                  'title' => 'الفعاليات',
                  'id' => 'Events'
                ],
                [
                  'title' => 'اشراك الطلاب في نشاطات',
                  'id' => 'studient_activities'
                ]
              ]
            ]
          ];
        return  view('welcome')->with('titlesAndIds',$titlesAndIds);

    }
    
    public function rating() {
        return view('rating');
    }

    public function test() {
        return view('test');
    }


}
