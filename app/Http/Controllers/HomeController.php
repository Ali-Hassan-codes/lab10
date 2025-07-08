<?php

namespace App\Http\Controllers;
use App\Models\courses;
use App\Http\Controllers\Illuminate\Support\Facades\Hash;
use App\Models\Home;
use Illuminate\Http\Request;
use Auth;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    
    //    $courses=courses::all();
    //    return view('Home',compact('courses'));
    // }
    //FORDISPLAY FUNCTION FOR SUBJECT
    public function index2()
    {
        return view('course');
    }

//     public function login_show()
//     {
//         return view('login');
//     }
//     public function web_show()
//     {
//         if(session()->has('id')) {
//             return view('web');
//         } else {
//             return view('login');
//         }
//     }
    
// use Illuminate\Support\Facades\Hash;

// public function login(Request $request)
// {
//     $home = Home::where('Name', $request->name)->first();

//     if ($home && Hash::check($request->password, $home->Password)) {
//         $request->session()->put('id', $home->id);

//         if ($home->Subject_Id == 1) {
//             return redirect()->route('subject_1_page');
//         } elseif ($home->Subject_Id == 2) {
//             return redirect()->route('subject_2_page');
//         } elseif ($home->Subject_Id == 3) {
//             return redirect()->route('subject_3_page');
//         } elseif ($home->Subject_Id == 4) {
//             return redirect()->route('subject_4_page');
//         } elseif ($home->Subject_Id == 8) {
//             return redirect()->route('subject_8_page');
//         } else {
//             return redirect()->back()->with('error', 'Unauthorized Subject ID');
//         }

//     } else {
//         return redirect()->back()->with('error', 'Invalid name or password');
//     }
// }


//     public function logout(Request $request)
//     {
//         $request->session()->invalidate();
//         return redirect()->route('login');
//     }

//     /**
//      * Store a newly created resource in storage.
//      */
//     public function store(Request $request)
//     {
//          $request->validate([
//         'name' => 'required|string|max:255',
//         'password' => 'required|string|min:8',
//         'Subject' => 'required|integer', // Optional: if Subject is needed
//     ]);
//         $variable = new Home();
//         $variable->Name = $request->name;
//         $variable->Password =Hash::make($request->password);
//         $variable->Subject_Id = $request->Subject;
//         $variable->save();
//         return redirect()->route('web_show');
//     }
//     //STORE FUNCTION FOR COURSE
//     public function store2(Request $request)
//     {
//         $variable = new courses();
//         $variable->Course_Name = $request->course_name;
//         $variable->save();
//         return redirect()->back();
//     }

//     /**
//      * Display the specified resource.
//      */
//     public function show(Home $home)
//     {
    
//         $show=Home::all();
//         return view('display',compact('show'));
//     }


// // DISPPLAY DATA OF SUBJECT 
//     public function show2(Home $home)
//     {
//         $show=courses::all();
//         return view('course_display',compact('show'));
//     }

//     /**
//      * Show the form for editing the specified resource.
//      */
//     public function edit(Request $request)
//     {
//         $edit = Home::find($request->id);
//         $courses=courses::all();
//         // return view('update', compact('edit'));
//         if($edit){
//             return view('update', compact('edit','courses'));
//         }
//         else{
//             return redirect()->route('display_data');
//         }
//     }
//     //COURSE EDIT
//     public function edit2(Request $request)
//     {
//         $edit = courses::find($request->id);
//         // return view('update', compact('edit'));
//         if($edit){
//             return view('course_update', compact('edit'));
//         }
//         else{
//             return redirect()->route('display_courses');
//         }
//     }

//     /**
//      * Update the specified resource in storage.
//      */
//     public function update(Request $request)
//     {
//         $variable=Home::find($request->id);
//         $variable->Name = $request->name;
//         $variable->Password =Hash::make($request->password);
//        $variable->Subject_id = $request->id;
//         $variable->update();
//         // return view('display');
//         return redirect()->route('display_data');
//     }
//     //COURSE UPDATE
//     public function update2(Request $request)
//     {
//         $variable=courses::find($request->id);
        
//         $variable->Course_Name = $request->course_name;
//         $variable->update();
//         // return view('display');
//         return redirect()->route('display_courses');
//     }

//     /**
//      * Remove the specified resource from storage.
//      */
//     public function destroy(Request $request)
//     {
//         $id = $request->id;
//         if($id){
//             Home::destroy($id);
//             return redirect()->route('display_home');
//         }
//         return redirect()->route('display_data');
//     }
//     //COURSE DELETE
//     public function destroy2(Request $request)
//     {
//         $id = $request->id;
//         if($id){
//             courses::destroy($id);
//             return redirect()->route('display_courses');
//         }
//         return redirect()->route('display_courses');
//     }
}
