<?php

namespace App\Http\Controllers;


use App\Listing;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use DB;
//use Intervention\Image\Facades\Image;
class CreateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allListing = Listing::all();
        return view('layouts.home.index_page')->with(['allListing'=>$allListing]);
//
    }

    public function profile(){
//        $user = Auth::user();
//        return view('layouts.home.user_profile')->with(['user' => $user]);
        $user = DB::table('listings')
            ->join('users','listings.user_id' ,'=','users.id')
            ->select('listings.*','users.name')

            ->get();
        return view('layouts.home.user_profile')->with([Auth::User()->id, 'user'=>$user]);

    }

    public function profileImage(){
        return view('layouts.dashboard.reset-pro-image', array('user' => Auth::user()));
    }

    public function updateProfileImage(Request $request){



            $avater = $request->file('avater');
            $filename = $avater->getClientOriginalName();
            $path = 'public/imageeee/';
            $avater->move($path, $filename);
            $userId = Auth::user()->id;
            DB::table('users')->where('id', $userId)->update(['avater' => $filename]);

            return redirect('/profile')->with('message','Photo has been changed');


    }
public function listLayout(){
        $allListing = Listing::all();
        return view('layouts.home.listing-with-sidebar')->with(['allListing'=>$allListing]);
}
public function blog(){
    return view('layouts.home.blog');
}
public function contact(){
    return view('layouts.home.contact');
}
public function message(){
    return view('layouts.dashboard.message');
}
public function bookings(){
    return view('layouts.dashboard.bookings');
}
	public function reviews(){
    return view('layouts.dashboard.reviews');
}
	public function bookmarks(){
    return view('layouts.dashboard.bookmarks');
}
	public function invoice(){
    return view('layouts.home.invoice');
}
	public function userBooking(){
    return view('layouts.home.user-booking');
}
	
	public function comingSoon(){
    return view('layouts.home.coming-soon');
}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('layouts.dashboard.create-listing-form');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $image=$request->file('upload_file');
        $name=$image->getClientOriginalName();
        $uploadPath='public/imageeee/';
        $image->move($uploadPath, $name);
        $imageUrl=$uploadPath.$name;


        $user= Auth::user()->id;
        $img=new Listing();
        $img->id=$request->id;
        $img->user_id=$user;
        $img->title=$request->title;
        $img->category=$request->category;
        $img->keywords=$request->keywords;
        $img->city=$request->city;
        $img->address=$request->address;
        $img->state=$request->state;
        $img->zip_code=$request->zip_code;

        $img->description=$request->description;
        $img->phone=$request->phone;
        $img->website=$request->website;
        $img->email=$request->email;
        $img->fb=$request->fb;
        $img->twitr=$request->twitr;
        $img->google=$request->google;
        $img->elevator=$request->elevator;
        $img->workspace=$request->workspace;
        $img->booking=$request->booking;
        $img->internet=$request->internet;
        $img->parking=$request->parking;
        $img->street=$request->street;
        $img->smoking=$request->smoking;
        $img->events=$request->events;

        $img->monday_op=$request->monday_op;
        $img->monday_cl=$request->monday_cl;
        $img->tuesday_op=$request->tuesday_op;
        $img->tuesday_cl=$request->tuesday_cl;
        $img->wednesday_op=$request->wednesday_op;
        $img->wednesday_cl=$request->wednesday_cl;
        $img->thursday_op=$request->thursday_op;
        $img->thursday_cl=$request->thursday_cl;
        $img->friday_op=$request->friday_op;
        $img->friday_cl=$request->friday_cl;
        $img->saturday_op=$request->saturday_op;
        $img->saturday_cl=$request->saturday_cl;
        $img->sunday_op=$request->sunday_op;
        $img->sunday_cl=$request->sunday_cl;

        $img->pricing_product=$request->pricing_product;
        $img->pricing_des=$request->pricing_des;
        $img->price=$request->price;
        $img->upload_file=$imageUrl;
        $img->save();
                return redirect ('/add-listing')->with('message','Your Listing Successfully Saved. Click here to preview');


    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function show($id)
    {
        $listing = DB::table('listings')
            ->join('users','listings.user_id' ,'=','users.id')
            ->select('listings.*','users.name')
            ->where('listings.id', $id)
            ->first();

        return view('layouts.dashboard.listing-single')->with(['listing'=>$listing]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $listing = Listing::find($id);
        return view('layouts.dashboard.list-edit')->with(['listing'=>$listing]);

    }

    public function showEdit()
    {
        $alllisting = DB::table('listings')
            ->join('users','listings.user_id' ,'=','users.id')
            ->select('listings.*','users.name')

            ->get();


        return view('layouts.dashboard.my-listing')->with([Auth::User()->id, 'alllisting'=>$alllisting]);

}
public function getDashboard()
{
    $allListing = Listing::all();
    return view('layouts.dashboard.main-dashboard')->with(['allListing'=>$allListing]);
}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $imageUrl = $this->imageExistStatus($request);
        $img = Listing::find($request->id);

        $img->title=$request->title;
        $img->category=$request->category;
        $img->keywords=$request->keywords;
        $img->city=$request->city;
        $img->address=$request->address;
        $img->state=$request->state;
        $img->zip_code=$request->zip_code;
        $img->upload_file=$imageUrl;
        $img->description=$request->description;
        $img->phone=$request->phone;
        $img->website=$request->website;
        $img->email=$request->email;
        $img->fb=$request->fb;
        $img->twitr=$request->twitr;
        $img->google=$request->google;
        $img->elevator=$request->elevator;
        $img->workspace=$request->workspace;
        $img->booking=$request->booking;
        $img->internet=$request->internet;
        $img->parking=$request->parking;
        $img->street=$request->street;
        $img->smoking=$request->smoking;
        $img->events=$request->events;
        $img->monday_op=$request->monday_op;
        $img->monday_cl=$request->monday_cl;
        $img->tuesday_op=$request->tuesday_op;
        $img->tuesday_cl=$request->tuesday_cl;
        $img->wednesday_op=$request->wednesday_op;
        $img->wednesday_cl=$request->wednesday_cl;
        $img->thursday_op=$request->thursday_op;
        $img->thursday_cl=$request->thursday_cl;
        $img->friday_op=$request->friday_op;
        $img->friday_cl=$request->friday_cl;
        $img->saturday_op=$request->saturday_op;
        $img->saturday_cl=$request->saturday_cl;
        $img->sunday_op=$request->sunday_op;
        $img->sunday_cl=$request->sunday_cl;
        $img->pricing_product=$request->pricing_product;
        $img->pricing_des=$request->pricing_des;
        $img->price=$request->price;
        $img->save();


        return redirect('/my-list/{name}')->with('message','Your Listing Successfully Updated');



    }

   private function imageExistStatus($request){
       $listById = Listing::where('id', $request->idd)->first();
       $image=$request->file('upload_file');
       if ($image){
           unlink( $listById->upload_file);
           $name=$image->getClientOriginalName();
           $uploadPath='public/imageeee/';
           $image->move($uploadPath, $name);

           $imageUrl=$uploadPath.$name;


       }
       else {

           $imageUrl = $listById->upload_file;
       }
       return $imageUrl;
   }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $listing = Listing::find($id);
        $listing->delete();

        return redirect('/my-list/{}');

    }
}
