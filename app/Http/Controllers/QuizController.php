<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\Studentinfo;
use App\Result;
use App\User;



class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

   public function time()
    {   $time=$_GET['time'];  
        $username=$_GET['username'];
        $name=$_GET['name'];
        $email=$_GET['email'];
        $dob=$_GET['dob'];
        $Contact_no=$_GET['Contact_no'];
        $password=$_GET['password'];

        $match=User::where('username',$username)->first();
     
    if(isset($match->username))
    {
     User::where('username', $match->username)->update( [ 
                                 'name'=>$name,
                                 'username'=>$username,
                                 'email'=>$email,
                                 'dob'=>$dob,
                                 'Contact_no'=>$Contact_no,
                                 'password'=>$password,
                                'time'=>$time ]);

    }
    else  {  
                      User::create([
                               
                                 'name'=>$name,
                                 'username'=>$username,
                                 'email'=>$email,
                                 'dob'=>$dob,
                                 'Contact_no'=>$Contact_no,
                                 'password'=>$password,
                                'time'=>$time
                            ]);  }
     
    


    }

    // public function quiz($username)
    // {    $i=0;
    //     $quiz=Admin::all();
    //     $user=User::where('username',$username)->first(); 
    //     return view('quizview' , ['quiz'=>$quiz,'i'=>$i, 'user'=>$user]);

    // }
    public function quiz()
    {    $i=0;
        $quiz=Admin::all();
         
        return view('quizview' , ['quiz'=>$quiz,'i'=>$i]);

    }


     public function next()
    {   $i=$_GET['j']+1;
        $m=0;
        for($l=1;$m!=1;$l++)
        {
         $q_id=$_GET['q_id']+1;
         $q1=Admin::where('id',$q_id)->get();
         if(isset($q1))
            $m=1;

        }

        //$q_id=$_GET['q_id']+1;
        $username=$_GET['username'];
        $quiz=Admin::get();
        $response=Result::where('q_no',$q_id)->where('username',$username)->first();
        return view('returnviewquiz' , ['quiz'=>$quiz,'i'=>$i ,'response'=>$response]);
    }
     public function back()
    {   $i=$_GET['j']-1;
        $m=0;
        for($l=1;$m!=1;$l++)
        {
         $q_id=$_GET['q_id']-1;
         $q1=Admin::where('id',$q_id)->get();
         if(isset($q1))
            $m=1;

        }
        $username=$_GET['username'];
        $quiz=Admin::get();
        $response=Result::where('q_no',$q_id)->where('username',$username)->first();
        return view('returnviewquiz' , ['quiz'=>$quiz,'i'=>$i ,'response'=>$response]);
    }

    public function circle()
    {   $i=$_GET['op'];
         $id=Admin::select('id')->first();
         $q_id=$id->id;
         $m=0;
        for($l=1;$m!=$i;$l++)
        {
         //$q_id=$_GET['q_id']+1;
            $q_id+= 1;
         $q1=Admin::where('id',$q_id)->get();
         if(isset($q1))
            $m++;

        }
        $username=$_GET['username'];
        $response=Result::where('q_no',$q_id)->where('username',$username)->first();
        $quiz=Admin::get();
        return view('returnviewquiz' , ['quiz'=>$quiz,'i'=>$i ,'response'=>$response]);
    }

    public function response()
    {   $q_id=$_GET['q_id'];
        $username=$_GET['username'];
        //echo $username;
        $option=$_GET['option'];
        $st=User::where('username',$username)->first();
         
    
     $match=Result::where('q_no',$q_id)->where('username',$username)->first();
    //echo $match;
    if($match)
    {
     Result::where('id', $match->id)->update( [ 
                               
                               'username'=>$username,
                               'q_no'=>$q_id,
                               'response'=>$option ]);

    }
    else  {  
                      Result::create([
                               
                               'username'=>$username,
                               'q_no'=>$q_id,
                               'response'=>$option]);  }
    //return redirect('/quiz'); 
    }

    // public function connect()
    // {
    // $ip= $_SERVER['REMOTE_ADDR'];
    // $match=Ip::where('ip',$ip)->first();
    // if($match){echo "This ip address already exist.";}
    // else  {  
    // Ip::create(['ip'=>$ip]); 
    // $c=Ip::where('ip',$ip)->first();
    // setcookie('user_id', $c->id);
    // //echo $_COOKIE['user_id'];
    // echo "You are connected successfully.";
    // return redirect('/welcome');
    // }
    // }

    // public function check()
    // {
    //     echo $_COOKIE['user_id'];
    // }

    // public function wel()
    // {
    //     $ip= $_SERVER['REMOTE_ADDR'];
    //     $match=Ip::where('ip',$ip)->first();
    //     $st=System_allotment::where('ip',$ip)->first();
    //     return view('wel' , ['match'=>$match , 'st'=>$st]);
        
    // }
    // public function st_info($system_no)
    // {
         
    //     $stu=System_allotment::where('system_no',$system_no)->first();
    //     //echo $stu;
    //    $st=Studentinfo::where('studentnumber',$stu->student_no)->first();

    //     return view('st_info' , ['st'=>$st]);
        
    // }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    // public function stinfo(Request $request)
    // {
    //     $username=$request->username;
    //      $user=User::where('username',$username)->get();
    //     return view('st_info' , ['user'=>$user]);

    // }


public function login(Request $request)
    {
        $username=$request->username;
        $password=md5($request->password);
       //echo $password;

          $user=User::where('username',$username)->first();
          //echo $user->password;
    if($user){
         if($username==$user->username && $password==$user->password)
         {
            return view('st_info' , ['user'=>$user]);

         }

         else{
           echo " <script>
            alert('Password is incorrect!')
            </script>";
            return view('login');
         }
      
        }
     else{
       echo "<script>
            alert('Username is not registered!')
      </script>";
      return view('auth.login');
     }   
    }
}
