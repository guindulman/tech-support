<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;

use App\Ipinfo;





class IpinfosController extends Controller
{
    
	public function index()
	{

    	$ipinfos = Ipinfo::all();

    	return view('ipinfo.ip_add', compact('ipinfos'));
    
    }


    public function show($id)
    {
        

    	$ipinfos = Ipinfo::find($id);

        return view('ipinfo.show', compact('ipinfos'));
    }


	public function add()
	{

	    	return view('ipinfo.add');
	}


    public function store()
    {

    	$input = Request::all();

    	
        Ipinfo::create($input);

    	return redirect('ipinfos');
        
    }


     public function destroy($id)
    {
        Ipinfo::where('id',$id)->delete();

        return redirect('ipinfos');
    }


    public function edit($id)
    {
        $ipinfos = Ipinfo::findOrFail($id);

        return view('ipinfo.edit', compact('ipinfos'));
    }


    public function update(Request $request, ipinfos $id)
    {

        $request->update($request->all());

        return back();


/*        
        $ipinfos = Ipinfo::findOrFail($id);

        $input = $request->all();

        $ipinfos->fill($input)->save();
*/

       /* $input = Request::all();

        
        Ipinfo::create($input);

        Ipinfo::where("id", $id)->update($input);
*/



    /*    $input = $request->all();

        Ipinfo::where("id", $id)->update($input);

        $ipinfos = Ipinfo::find($id);

        return response($ipinfos);*/

    }

}
