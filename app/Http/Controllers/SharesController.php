<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Share;
use App\Http\Controllers\Auth;
class SharesController extends Controller
{
    
     public function __construct(){
        $this->middleware('auth');
    }
     public function index()
             
    {
        
//        $shares = Share::orderBy('qty','desc')->get();
        $shares = Share::where('user_id','=',Auth()->id())
                        ->orderby('qty', 'desc')->get();
        return view('shares.index',compact('shares'));
        
    }
 
    
    public function create()
    {
        return view('shares.create');
    }

   
    public function store(Request $request)
    {
        $this->validate(request(), [
            
            'name' => 'required',
            'price' => 'required',
            'qty' => 'required'
            
        ]);
        
      auth()->user()->publish(
                new Share(request(['name','price','qty','user_id']))
                );
      return redirect('/shares');
    }


    
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
        $share = Share::find($id);

        return view('shares.edit', compact('share'));
    }

    public function update(Request $request, $id)
    {
         $request->validate([
        'name'=>'required',
        'price'=> 'required|integer',
        'qty' => 'required|integer'
      ]);

      $share = Share::find($id);
      $share->name = $request->get('name');
      $share->price = $request->get('price');
      $share->qty = $request->get('qty');
      $share->save();

      return redirect('/shares');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $share = Share::find($id);
        $share->delete();

     return redirect('/shares');
   
    }
}
