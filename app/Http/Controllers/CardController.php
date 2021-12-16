<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Seminar;

class CardController extends Controller
{
    public function getCourseCard($courses,$id) {
        $item = Course::where('id',$id)->first();

        return view('card.index',[
            'item' => $item,
            'card_route' => 'courses_img'
        ]);
    }
    public function getSeminarCard($seminars,$id) {
        $item = Seminar::where('id',$id)->first();

        return view('card.index',[
            'item' => $item,
            'card_route' => $seminars
        ]);
    }
}
