<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Paginition\Paginator;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;
use Illuminate\Support\Facades\Input;
 
use App\User;
use App\Admin;
use App\Studentinfo;
use App\Result;
use App\Final_result;

class adminController extends Controller
{  
    
    public function allusers()
    {
        $users=User::simplePaginate(10);
        return view('allusers' , ['users'=>$users]);
    }

    public function destroy_user(Request $request , $id )
    { $userss = User::where('id',$id)->get();
         User::destroy($id);
         $users=User::simplePaginate(10);
         return  view('allusers',['users'=>$users]);
    }
    
    public function edit_ur_detail($username)
    {
        $users = User::where('username',$username)->first();
        return view('edit_ur_detail',['users'=>$users] ); 
        
    }

    public function update_ur_detail(Request $request, $id)
    {
        $user = User::find($id);
         
        $user->update([
                      'name'=>$request->name,
                      'username'=>$request->username,
                      'email'=>$request->email,
                      'dob'=>$request->dob,
                      'Contact_no'=>$request->Contact_no,
                       
                      ]);
         return  view('urdetail', compact('user'));
    }

    public function all_Ques()
    {
        $ques=Admin::get();
        return view('all_Ques' , ['ques'=>$ques]);
    }

    public function destroy_ques(Request $request , $id )
    { 
         Admin::destroy($id);
         $ques=Admin::get();
        return view('all_Ques' , ['ques'=>$ques]);
          
    }
    
    public function edit_ques($id)
    {
         $ques= Admin::find($id);
        return view('edit_ques',['ques'=>$ques] ); 
        
    }

    public function update_ques(Request $request, $id)
    {
        $quess = Admin::find($id);
         
        $quess->update([
                      'question'=>$request->question,
                      'option1'=>$request->option1,
                      'option2'=>$request->option2,
                      'option3'=>$request->option3,
                      'option4'=>$request->option4,
                      'answer'=>$request->answer,
                       
                       
                      ]);
        $ques=Admin::get();
        return view('all_Ques' , ['ques'=>$ques]);
          
    }
    // public function addStudent(){
    //     $match=System_allotment::select('ip')->get();

    //     $ips=Ip::where('ip','!=','')
    //             ->whereNotIn('ip',$match)
    //             ->first();
    //     //echo $ips->ip;
    //             // return $ips;
    //     return view('admin.addStudent',['ips'=>$ips]);   

    //         }


        // $i=0;
        //  $match=System_allotment::get();
        //  $ip=Ip::where('ip',$match[$i]->ip)->first();
        // // echo $match[$i];
        //  //echo $ip->id;
        //  if($ip->id)
        //  {
        //   $i++;
        //   echo $i;
        //   $ip=Ip::where('ip',$match[$i]->ip)->first();
        // }
        // $ips=Ip::where('ip',$match[$i]->ip)->first();
        // echo $ips->ip;
        //return view('admin.addStudent',['ips'=>$ips]); 
                            
// public function st_store(Request $request)
//           {
//             $st= $request->username; 
//             $match=System_allotment::where('username',$st)->first();
//             if($match){echo "This Student already exist!";}
//             else  {  
//               System_allotment::create([
//                             'username'=>$request->username,
//                              'system_no'=>$request->system_no,
//                              'ip'=>$request->ip]);
//                   }                                                                 //ques store
//               return view('admin.addStudent');  
         
//           }   


    // public function admin1(){
    // 		return view('admin.entry');   //ques enter
    //                         }

     public function admin2(Request $request)
          {
          	$ques= $request->question; 
            $match=Admin::where('question',$ques)->first();
            if($match){}
            else  {  
              admin::create($request->all());
                  }  
                  echo "<script>alert('successfully done , enter next ques!')</script>";  
                  session_start();
            $_SESSION["user"]="111";
            $_SESSION["pass"]="111";                                                             //ques store
             	return view('admin.entry');  
    		//return redirect('/admin1');
    		
    	    }   

     public function admin4(Request $request){
       //echo $request->user_name;
       //echo $request->pass_word;
    	if($request->user_name==111 && $request->pass_word==111)
    	{    session_start();
            $_SESSION["user"]="111";
            $_SESSION["pass"]="111";

             return view('admin.entry');  
    			 
    	}	
    	else{
        //echo $_SESSION["user"];
        //session_unset(); 
        //session_destroy();
    		return redirect('/adminlogin'); 
    	}
    }
    
 public function adminLogin()
    {
    	return view('admin.loginadmin');  //admin login

    } 	

    public function result_view()
    { $res = Final_result::get();
       //echo $result[0]->username;
       return view('result_view',['res'=>$res]);       //result_view

    }      

public function result()
{
    $username = Result::select('username')->distinct()->get();
    //echo $username[0]->username;
    $s = sizeof($username);
    $result= array();
    for($j=0; $j<$s; $j++)
    { 
      $st[$j] = $username[$j]->username;
      $ques_no = Result::select('q_no')->where('username',$st[$j])->distinct()->get();
      $q = sizeof($ques_no);
      //echo $st[$j];
    $response = Result::where('username', $st[$j])->get();
     //echo $response;
      $result[$st[$j]]=0;
      //echo $result[$st[$j]];
      for($i=0; $i<$q; $i++)
       {
           $ans  = Admin::where('id', $response[$i]->q_no)->value('answer');
          if(isset($ans)){
           if ($response[$i]->response==$ans)
            {
              $result[$st[$j]]+=4;
            } 
           else
            {
              $result[$st[$j]]-=1;
            }
      
           }
         } 

    $match=Final_result::where('username',$st[$j])->first();
    if($match)
    {
     Final_result::where('username', $st[$j])->update( [ 
                               'username'=>$st[$j],
                               'marks'=>$result[$st[$j]]
                                 ]);

    }
    else  {  
                      Final_result::create([
                            'username'=>$st[$j],
                            'marks'=>$result[$st[$j]]

                                ]);  }
          return redirect('/result_view'); 
         //echo "Result of  ".$st[$j]."  is  ".$result[$st[$j]];
     }   
      
     //echo $admin  = DB::table('admins')->where('id', $result)->value('answer');
     // $result = DB::table('results')->where('username', '45')->pluck('q_no');
     // $result1 = DB::table('results')->where('username', '45')->pluck('response');
     //$r= $result[0]->q_no;   
}



public function result2()
    {       $username= $_GET['username'];
            $Response = Result::where('username',$username)->get();
            $Result = Final_result::where('username',$username)->first();
            $r = sizeof($Response); 
            // $match=Admin::select('id')->get();
            // $m=sizeof($match);
          // echo $match[0];
         // $notques=Result::where('q_no','!=','')
         //        ->whereNotIn('q_no',$match)
         //        ->first();
            
         //    echo $notques;
            $ques=Admin::get();
            return view('result2' , ['ques'=>$ques ,'Response'=>$Response , 'Result'=>$Result ,'r'=>$r]);

     }       
           

            


                                  
}
