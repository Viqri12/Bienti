<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\influencer;
use App\Models\Rate_card;
use App\Models\SocialmediaHasInfluencer;
use App\Models\Tier;
use App\Models\Comunity;
use App\Models\RateCardHasInfluencer;
use App\Models\SosialMedia;
use App\Models\TierSosmed;

use Illuminate\Http\Request;

class DataKolController extends Controller
{
    //COMUNITY
    public function comunity_data()
    {
        $table = 'Comunity';
        $data = Comunity::with('category')->get();
        return view('admin.data-KOL.data-table', compact('table','data'));
    }


    //INSTAGRAM
    public function instagram_data()
    {
        $table = 'Instagram';
        $sosial = SosialMedia::where('name','instagram')->first();
        $influencer = influencer::whereHas('sosialmedia',function($q) use ($sosial){
        $q->where('sosial_media_id',$sosial->id);
       })->with(['sosialmedia' => function($q) use ($sosial){
            $q->where('sosial_media_id',$sosial->id);
        },'tier'])->get(); 
        $listRateCard = Rate_card::where('sosial_media_id',$sosial->id)->get();
        // return $influencer;
        return view('admin.data-KOL.data-instagram', compact('table','influencer','listRateCard','sosial'));
    }
    
    public function EditKol($id) 
    {
        $table = 'Edit KOL Instagram';
        $data = TierSosmed::all();
        $sosial = SosialMedia::where('name','instagram')->first();
        $influencer = influencer::where('id',$id)->whereHas('sosialmedia',function($q) use ($sosial){
            $q->where('sosial_media_id',$sosial->id);
        })->with(['sosialmedia' => function($q) use ($sosial){
            $q->where('sosial_media_id',$sosial->id);
        }])->first();   
        return view('admin.edit-KOL.edit-KOL-instagram', compact('table','influencer','id','sosial','data'));
    }

    public function EditKolData(Request $request,$id)
    {
        // return $request;
        $data = influencer::find($id);
        $data->update([
            'name' => $request->name,
        ]);
        // return $data;
        $data2 = SocialmediaHasInfluencer::where('sosial_media_id',$request->sosialmedia_id)->where('influencer_id',$id)->first();
        $data2->update([
            'followers' => $request->followers,
            'username' => $request->username,
            'link' => $request->ig_link,
            'tier' => $request->tier,
            'notes' => $request->notes
        ]);
        $data = [];
        foreach ($request->ratecard_id as $key => $value) {
          RateCardHasInfluencer::where('id',$value)->update([
            'price' =>  $request->ratecard[$key]
          ]);
        }
        Alert::success('Berhasil', 'KOL Instagram Berhasil di Edit');
        return redirect('admin/data-KOL-instagram');
    }

    public function hapusInstagram($id)
    {
        $hapus = SocialmediaHasInfluencer::find($id);
        $hapus->delete();

        Alert::warning('Delete', 'KOL Instagram Berhasil di Hapus');
        return back();
    }

    
    //TWITTER
    public function twitter_data()
    {
        $table = 'Twitter';
        $sosial = SosialMedia::where('name','twitter')->first();
        $influencer = influencer::whereHas('sosialmedia',function($q) use ($sosial){
            $q->where('sosial_media_id',$sosial->id);
        })->with(['sosialmedia' => function($q) use ($sosial){
            $q->where('sosial_media_id',$sosial->id);
        },'tier'])->get(); 
        $listRateCard = Rate_card::where('sosial_media_id',$sosial->id)->get();
        // return $influencer;
        return view('admin.data-KOL.data-twitter', compact('table','influencer','listRateCard','sosial'));
    }
    
    public function EditKolTwitter($id) 
    {
        $table = 'Edit KOL Twitter';
        $tier = TierSosmed::all();
        $sosial = SosialMedia::where('name','twitter')->first();
        $influencer = influencer::where('id',$id)->whereHas('sosialmedia',function($q) use ($sosial){
            $q->where('sosial_media_id',$sosial->id);
        })->with(['sosialmedia' => function($q) use ($sosial){
            $q->where('sosial_media_id',$sosial->id);
        }])->first();
        return view('admin.edit-KOL.edit-KOL-twitter', compact('table','influencer','id','sosial','tier'));
    }
    
    public function EditDataTwiiter(Request $request, $id)
    {
         return $request;
         $data = influencer::find($id);
         $data->update([
             'name' => $request->name,
         ]);
         // return $data;
         $data2 = SocialmediaHasInfluencer::where('sosial_media_id',$request->sosialmedia_id)->where('influencer_id',$id)->first();
         $data2->update([
             'followers' => $request->followers,
             'username' => $request->username,
             'link' => $request->ig_link,
             'tier' => $request->tier,
             'notes' => $request->notes
         ]);
        //  $data = [];
         foreach ($request->ratecard_id as $key => $value) {
           RateCardHasInfluencer::where('id',$value)->update([
             'price' =>  $request->ratecard[$key]
           ]);
         }
         Alert::success('Berhasil', 'KOL Twitter Berhasil di Edit');
         return redirect('admin/data-KOL-twitter');
    }

    public function hapusTwitter($id)
    {
        SocialmediaHasInfluencer::where('id',$id)->delete();
        // $hapus->delete();

        Alert::warning('Delete', 'KOL Twitter Berhasil di Hapus');
        return back();
    }

    //YOUTUBE
    public function youtube_data()
    {
        $table = 'Youtube';
        $sosial = SosialMedia::where('name','youtube')->first();
        $influencer = influencer::whereHas('sosialmedia', function($q) use ($sosial){
            $q->where('sosial_media_id',$sosial->id);
        })->with(['sosialmedia' => function($q) use ($sosial){
            $q->where('sosial_media_id',$sosial->id);
        },'tier'])->get(); 
        $listRateCard = Rate_card::where('sosial_media_id',$sosial->id)->get();
        // return $influencer;
        return view('admin.data-KOL.data-youtube', compact('table','influencer','listRateCard','sosial'));
    }

    public function editYoutube($id) 
    {
        $table = 'Edit KOL Youtube';
        $data = TierSosmed::all();
        $sosial = SosialMedia::where('name','youtube')->first();
        $influencer = influencer::where('id',$id)->whereHas('sosialmedia',function($q) use ($sosial){
            $q->where('sosial_media_id',$sosial->id);
        })->with(['sosialmedia' => function($q) use ($sosial){
            $q->where('sosial_media_id',$sosial->id);
        }])->first();   
        return view('admin.edit-KOL.edit-KOL-youtube', compact('table','influencer','id','sosial','data'));
    }

    public function EditDataYoutube(Request $request, $id)
    {
         // return $request;
         $data = influencer::find($id);
         $data->update([
             'name' => $request->name,
         ]);
         // return $data;
         $data2 = SocialmediaHasInfluencer::where('sosial_media_id',$request->sosialmedia_id)->where('influencer_id',$id)->first();
         $data2->update([
             'followers' => $request->followers,
             'username' => $request->username,
             'link' => $request->ig_link,
             'tier' => $request->tier,
             'notes' => $request->notes
         ]);
        //  $data = [];
         foreach ($request->ratecard_id as $key => $value) {
           RateCardHasInfluencer::where('id',$value)->update([
             'price' =>  $request->ratecard[$key]
           ]);
         }
         Alert::success('Berhasil', 'KOL Youtube Berhasil di Edit');
         return redirect('admin/data-KOL-youtube');
    }

    public function HapusYoutube($id)
    {
        SocialmediaHasInfluencer::where('id',$id)->delete();
        // $hapus->delete();
        Alert::warning('Delete', 'KOL Youtube Berhasil di Hapus');
        return back();
    }
    

    //TIKTOK
    public function tiktok_data()
    {   
        $table = 'Tiktok';
        $sosial = SosialMedia::where('name','tiktok')->first();
        // return $sosial;
        $influencer = influencer::whereHas('sosialmedia', function($q) use ($sosial){
            $q->where('sosial_media_id',$sosial->id);
        })->with(['sosialmedia' => function($q) use ($sosial){
            $q->where('sosial_media_id',$sosial->id);
        },'tier'])->get(); 
        $listRateCard = Rate_card::where('sosial_media_id',$sosial->id)->get();
        // return $influencer;
        return view('admin.data-KOL.data-tiktok', compact('table','influencer','listRateCard','sosial'));
    }

    
    public function EditTiktok($id) 
    {
        $table = 'Edit KOL Youtube';
        $data = TierSosmed::all();
        $sosial = SosialMedia::where('name','tiktok')->first();
        $influencer = influencer::where('id',$id)->whereHas('sosialmedia',function($q) use ($sosial){
            $q->where('sosial_media_id',$sosial->id);
        })->with(['sosialmedia' => function($q) use ($sosial){
            $q->where('sosial_media_id',$sosial->id);
        }])->first();   
        return view('admin.edit-KOL.edit-KOL-tiktok', compact('table','influencer','id','sosial','data'));
    }

    public function EditDataKol(Request $request, $id)
    {
          // return $request;
          $data = influencer::find($id);
          $data->update([
              'name' => $request->name,
          ]);
          // return $data;
          $data2 = SocialmediaHasInfluencer::where('sosial_media_id',$request->sosialmedia_id)->where('influencer_id',$id)->first();
          $data2->update([
              'followers' => $request->followers,
              'username' =>          $request->username,
              'link' => $request->ig_link,
              'tier' => $request->tier,
              'notes' => $request->notes
          ]);
         //  $data = [];
          foreach ($request->ratecard_id as $key => $value) {
            RateCardHasInfluencer::where('id',$value)->update([
              'price' =>  $request->ratecard[$key]
            ]);
          }
          Alert::success('Berhasil', 'KOL Tiktok Berhasil di Edit');
          return redirect('admin/data-KOL-tiktok');
    }

    public function HapusTiktok($id)
    {
        SocialmediaHasInfluencer::where('id',$id)->delete();

        Alert::warning('Delete', 'KOL Tiktok Berhasil di Hapus');
        return back();
    }

    //TALENT
    // public function 

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
