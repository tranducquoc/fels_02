<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Topic;
use App\Models\Lesson;
use App\Models\LessonDetail;

class Home extends Controller
{
	public function index(Request $request)
	{
		$displayTopics = Topic::get();
        $displayLessons = Lesson::get();

        $lessonsForToday = Lesson::get();
        $displayWordToday = LessonDetail::inRandomOrder()->limit(config('setting.number_limit'))->get();
		$displayTopicToday = Topic::inRandomOrder()->limit(config('setting.number_limitTopic'))->get();

    	return view('home.index.index', compact('displayTopics', 'displayLessons', 'displayWordToday', 'displayTopicToday', 'displayWord', 'lessonsForToday'));
	}
}
