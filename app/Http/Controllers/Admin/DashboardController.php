<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category_comunity;
use App\Models\Category_Media;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\CategoryInfluencer;
use App\Models\influencer;
use App\Models\InfluencerHasCategory;
use App\Models\RateCardHasInfluencer;
use App\Models\SocialmediaHasInfluencer;
use App\Models\SosialMedia;
use App\Models\Talent;
use App\Models\Comunity;
use App\Models\Media;
use App\Models\Tier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $table = 'Dashboard';
        $influencer = influencer::with('sosialmedia','category_1','tier')->latest()->get();
        $totalinput = 0;
        $sosial = SosialMedia::latest()->get();
        $allCount = [];   
        // return $sosial;
        foreach ($sosial as $key => $value) {
               // return $value;
            $getInfluencer = socialmediaHasInfluencer::where('sosial_media_id',$value->id)->count();
            $allCount[$value->name] = $getInfluencer; 
            $totalinput += $getInfluencer;
        }   
        // return socialmediaHasInfluencer::where('sosial_media_id',)->get();
        // return $allCount;  
        $countComunity = Comunity::count();
        $countMedia = Media::count();
        $countTalent = Talent::count(); //salah na anu $totalinput lin
        // $totalinput +=  $allCount[$value->name]; // 
        $totalinput += $countComunity;
        $totalinput += $countMedia;
        $totalinput += $countTalent;
        // return $totalinput;  
        return view('admin.dashboard', compact('table','influencer','sosial','allCount','countComunity','countMedia','countTalent','totalinput'));
    }

    //TAMBAH INFLUENCER
    public function influencer()
    {
        $table = 'Influencer';
        $data = Tier::all();
        $category = CategoryInfluencer::all();
        // return $category;
        return view('admin.tambah-influencer', compact('data','category','table'));
    }

    public function influencerPost(Request $request)
    {
          // return $request;
        //   return gettype($request->category[0]);
          $create = influencer::create([
            'name' => $request->name,   
            'phone' => $request->phone,
            'jenis_kelamin' => $request->jenis_kelamin,
            'domisili' => $request->domisili,
            'tier_id' => $request->tier
        ]);
        for($i=0; $i < count($request->category);$i++)
        {
            if(is_numeric($request->category[$i])){
                InfluencerHasCategory::create([
                    'influencer_id' => $create->id,
                    'category_influencer_id' => $request->category[$i]
                ]);
            }else{
                $createCategory = CategoryInfluencer::create([
                    'name' => $request->category[$i]
                ]);
                InfluencerHasCategory::create([
                    'influencer_id' => $create->id,
                    'category_influencer_id' => $createCategory->id 
                ]);
            }
        }
        // return gettype($request->category[0]);

        Alert::success('Berhasil', 'Influencer Berhasil di tambahkan');
        return redirect('admin/dashboard');
    }

    public function EditInfluencer($id)
    {
        $table = 'Edit Influencer';
        $category = CategoryInfluencer::all();
        $data = Tier::all();
        $influencer = influencer::where('id',$id)->with('category_1')->first();
        $dataIdInfluenser = [];
            foreach($influencer->category_1 as $item){
               $dataIdInfluenser[] = $item->category_2->id;
            }
            // return $dataIdInfluenser;
        return view('admin.edit-KOL.edit-KOL-influencer', compact('table','category','data','influencer','id','dataIdInfluenser'));
    }    

    public function EditInfluencerPost(Request $request, $id)
    {
        // return $request;
        $data = influencer::find($id);
        $data->update([
            'name' => $request->name,
            'jenis_kelamin' => $request->jenis_kelamin,
            'domisili' => $request->domisili,
            'phone' => $request->phone,
            'tier_id' => $request->tier
        ]);
        
        for($i=0; $i < count($request->category); $i++){
            $cek = InfluencerHasCategory::where('category_influencer_id',$request->category[$i])->where('influencer_id',$id)->first();
            if(!$cek){
            InfluencerHasCategory::create([
                'category_influencer_id' => $request->category[$i],
                'influencer_id' => $id
            ]);
            }
            }
            Alert::success('Berhasil', 'Influencer Berhasil di tambahkan');
            return redirect('admin/dashboard');
    }   

    public function hapusIinfluencer($id)
    {
        $hapus = influencer::find($id);
        $hapus->delete();

        Alert::warning('Delete', 'Influencer Berhasil di Hapus');
        return redirect('admin/dashboard');
    }

    //instagram
    public function tambah()
    {
        $table = 'Instagram';
        $list = [];
        $social = SosialMedia::with('RateCard')->where('name','instagram')->first();
        $influencer = influencer::with(['sosialmedia' => function($q) use ($social){
            $q->where('sosial_media_id', $social->id);
        }])->get();
        foreach ($influencer as $key => $item) {
            if(count($item->sosialmedia) == 0){
                $list[] = $item;
            }
        }
        // return $list;
        // return $social;  
        return view('admin.tambah-data', compact('table','social','influencer','list'));
    }

    public function create(Request $request)
    {
        // return $request;
        $create = SocialmediaHasInfluencer::create([
            'followers' => $request->followers,
            'username' => $request->username,
            'notes' => $request->notes,
            'link' => $request->ig_link,
            'influencer_id' => $request->name,
            'sosial_media_id' => $request->has_influencer
        ]);

        for($i=0; $i < count($request->ratecard_id);$i++)
        {
            RateCardHasInfluencer::create([
                'rate_card_id' => $request->ratecard_id[$i],
                'ratecard' => $request->ratecard_id[$i],
                'price' => $request->ratecard[$i],
                'socialmedia_has_influencer_id' => $create->id
            ]);
        }

       
        Alert::success('Berhasil', 'Instagram Berhasil di tambahkan');
        return redirect('admin/dashboard');
    }


    //comunity
    public function comunity()
    {
        $table = 'Comunity';
        $data = Comunity::with('category')->get();
        // return $data;
        return view('admin.tambah-comunity', compact('table','data'));
    }

    public function TambahComunity(Request $request)
    {
        // return $request;
        $tambah = Comunity::create([
            'name' => $request->name_comunity,
            'username' => $request->username,
            'followers' => $request->followers,
            'ig_link' => $request->comunity_link,
            'tier' => $request->tier,
            'ig_photo_feed' => $request->ig_photo_feed,
            'ig_Photo_feed_carousel' => $request->ig_carousel,
            'ig_Story' => $request->ig_story,
            'ig_Reels' => $request->ig_reels,
            'ig_Live' => $request->id_live,
            'attending_Event' => $request->attending_event,
            'domisili' => $request->domisili,
            'notes' => $request->notes 
        ]);

        // return $tambah;
        foreach ($request->category as $item) {
            Category_comunity::create([
                'comunity_id' => $tambah->id,
                'name' => $item
            ]);
          }
          
          Alert::success('Berhasil', 'Comunity Berhasil di tambahkan');
          return redirect('admin/dashboard');
    }

    public function editComunity($id)
    {
        $table = 'Comunity';
        $data = Comunity::where('id',$id)->with('category')->first();
        // return $data;
        $list = [];
        $lists = ["Komunitas Motor","Komunitas Seni","Komunitas Yayasan","Komunitas Music","Komunitas Olahraga"];
            foreach ($data->category as $key => $item) {
                $list[] = $item->name;
                $cari1 = array_filter($lists, function($p) use ($item){
                  return $p == $item->name;
                });
                if (count($cari1) == 0) {
                    $lists[] = $item->name;
                }
            };
        return view('admin.edit-KOL.edit-Comunity', compact('table','data','id','list','lists'));
    }

    public function EditDataComunity(Request $request, $id)
    {
        // return $request;
        $tambah = Comunity::find($id);
        $tambah->update([
            'name' => $request->name,
            'username' => $request->username,
            'followers' => $request->followers,
            'ig_link' => $request->ig_link,
            'tier' => $request->tier,
            'ig_photo_feed' => $request->ig_photo_feed,
            'ig_Photo_feed_carousel' => $request->ig_carousel,
            'ig_Story' => $request->ig_story,
            'ig_Reels' => $request->ig_reels,
            'ig_Live' => $request->id_live,
            'attending_Event' => $request->attending_event,
            'domisili' => $request->domisili,
            'notes' => $request->notes 
        ]);
        // return $tambah;
        foreach ($request->category as $value) {
           Category_comunity::where('id',$value)->update([
            'comunity_id' => $tambah->id,
            'name' => $value
           ]);
        }

        Alert::success('Berhasil', 'Comunity Berhasil di Edit');
        return redirect('admin/data-KOL-comunity');
    }

    public function HapusComunity($id)
    {
        $hapus = Comunity::find($id);
        $hapus->delete();


        Alert::warning('Delete', 'Comunity Berhasil di hapus');
        return back();
    }


    //media
    public function media()
    {
        $table = 'Media';
        $data = Media::with('category1')->get();
        // return $data;
        return view('admin.tambah-media', compact('table','data'));
    }

    public function TambahMedia(Request $request)
    {
        // return $request;
        $tambah = Media::create([
            'nama' => $request->name,
            'ig_link' => $request->ig_link,
            'followers' => $request->followers,
            'tier' => $request->tier,
            'ig_photo_feed' => $request->ig_photo_feed,
            'ig_Photo_feed_carousel' => $request->ig_Photo_feed_carousel,
            'ig_Story' => $request->ig_Story,
            'ig_story_with_link' => $request->ig_story_with_link,
            'press_release' => $request->press_release,
            'contact_person' => $request->contact_person,
            'notes' => $request->notes
        ]);
        // return $tambah;
        foreach ($request->category as $item) {
            Category_Media::create([
                'media_id' => $tambah->id,
                'name' => $item
            ]);
        }

        Alert::success('Berhasil', 'Media Berhasil di tambahkan');
        return redirect('admin/dashboard');
    }

    public function DataMedia()
    {
        $table = 'Media';
        $data = Media::with('category1')->get();
        // return $data;   
        return view('admin.data-KOL.data-media', compact('table','data'));
    }

    public function editMedia($id)
    {
        $table = 'Media';
        $data = Media::where('id',$id)->with('category1')->first();
        // return $data;
        // $input = ["data","table","kol"];
        // $search = array_filter($input, function($u){
        //     return $u == "table" || $u == "kol";
        // });

        // return count($search); 
        $list = [];
        $lists = ["Lifestyle","Beuty","Healthcare","tourism"];
            foreach ($data->category1 as $key => $item) {
                $list[] = $item->name;
                $cari1 = array_filter($lists, function($p) use ($item){
                  return $p == $item->name;
                });
                if (count($cari1) == 0) {
                    $lists[] = $item->name;
                }
            };
            // return $lists;
        return view('admin.edit-KOL.edit-media',compact('table','data','id','list','lists'));
    }

    public function EditDataMedia(Request $request, $id)
    {
        // return $request;
        $data = Media::find($id);
        $data->update([
            'nama' => $request->name,
            'ig_link' => $request->ig_link,
            'followers' => $request->followers,
            'tier' => $request->tier,
            'ig_photo_feed' => $request->ig_photo_feed,
            'ig_Photo_feed_carousel' => $request->ig_carousel,
            'ig_Story' => $request->ig_story,
            'ig_story_with_link' => $request->ig_story_with_link,
            'press_release' => $request->press_release,
            'contact_person' => $request->contact_person,
            'notes' => $request->notes
        ]);
        // return $data;
        foreach ($request->category as $item) {
            Category_Media::where('id', $item)->update([
                'media_id' => $data->id,
                'name' => $item
            ]);
        }
        
        Alert::success('Berhasil', 'Media Berhasil di Edit');
        return redirect('admin/data-media');
    }

    public function HapusMedia($id)
    {
        $hapus = Media::find($id);
        $hapus->delete();

        Alert::warning('Delete', 'Media Berhasil di hapus');
        return back();
    }

    //twitter
    public function twitter()
    {
        $table = 'Twitter';
        $list = [];
        $social = SosialMedia::with('RateCard')->where('name','twitter')->first();
        $influencer = influencer::with(['sosialmedia' => function($q) use ($social){
            $q->where('sosial_media_id', $social->id);
        }])->get();
        foreach ($influencer as $key => $item) {
            if(count($item->sosialmedia) == 0){
                $list[] = $item;
            }
        }
        return view('admin.tambah-twitter', compact('table','social','influencer','list'));
    }

    public function TambahTwitter(Request $request)
    {
        //  return $request;
         $create = SocialmediaHasInfluencer::create([
            'followers' => $request->followers,
            'username' => $request->username,
            'notes' => $request->notes,
            'link' => $request->ig_link,
            'influencer_id' => $request->name,
            'sosial_media_id' => $request->has_influencer
        ]);

        // dd($create);
        for($i=0; $i < count($request->ratecard_id);$i++)
        {
            RateCardHasInfluencer::create([
                'rate_card_id' => $request->ratecard_id[$i],
                'ratecard' => $request->ratecard_id[$i],
                'price' => $request->ratecard[$i],
                'socialmedia_has_influencer_id' => $create->id
            ]);
        }
       
        Alert::success('Berhasil', 'Twitter Berhasil di tambahkan');
        return redirect('admin/dashboard');
    }


    //youtube
    public function youtube()
    {
        $table = 'Youtube';
        $list = [];
        $social = SosialMedia::with('RateCard')->where('name','youtube')->first();
        $influencer = influencer::with(['sosialmedia' => function($q) use ($social){
            $q->where('sosial_media_id', $social->id);
        }])->get();
        foreach ($influencer as $key => $item) {
            if(count($item->sosialmedia) == 0){
                $list[] = $item;
            }
        }
        return view('admin.tambah-youtube', compact('table','social','influencer','list'));
    }

    public function TambahYoutube(Request $request)
    {
         //  return $request;
         $create = SocialmediaHasInfluencer::create([
            'followers' => $request->followers,
            'username' => $request->username,
            'notes' => $request->notes,
            'link' => $request->ig_link,
            'influencer_id' => $request->name,
            'sosial_media_id' => $request->has_influencer
        ]);

        // dd($create);
        for($i=0; $i < count($request->ratecard_id);$i++)
        {
            RateCardHasInfluencer::create([
                'rate_card_id' => $request->ratecard_id[$i],
                'ratecard' => $request->ratecard_id[$i],
                'price' => $request->ratecard[$i],
                'socialmedia_has_influencer_id' => $create->id
            ]);
        }
       
        Alert::success('Berhasil', 'Youtube Berhasil di tambahkan');
        return redirect('admin/dashboard');
    }


    //tiktok
    public function tiktok()
    {
        $table = 'Tiktok';
        $list = [];
        $social = SosialMedia::with('RateCard')->where('name','tiktok')->first();
        $influencer = influencer::with(['sosialmedia' => function($q) use ($social){
            $q->where('sosial_media_id', $social->id);
        }])->get();
        foreach ($influencer as $key => $item) {
            if(count($item->sosialmedia) == 0){
                $list[] = $item;
            }
        }
        return view('admin.tambah-tiktok', compact('table','social','influencer','list'));
    }

    public function TambahTiktok(Request $request)
    {
      //  return $request;
      $create = SocialmediaHasInfluencer::create([
        'followers' => $request->followers,
        'username' => $request->username,
        'notes' => $request->notes,
        'link' => $request->ig_link,
        'influencer_id' => $request->name,
        'sosial_media_id' => $request->has_influencer
    ]);

        // dd($create);
        for($i=0; $i < count($request->ratecard_id);$i++)
        {
            RateCardHasInfluencer::create([
                'rate_card_id' => $request->ratecard_id[$i],
                'ratecard' => $request->ratecard_id[$i],
                'price' => $request->ratecard[$i],
                'socialmedia_has_influencer_id' => $create->id
            ]);
        }
    
        Alert::success('Berhasil', 'Tiktok Berhasil di tambahkan');
        return redirect('admin/dashboard');
    }


    //talent
    public function talent()
    {
        $table = 'Talent / MC';
        return view('admin.tambah-talent', compact('table'));
    }

    public function TambahTalent(Request $request)
    {
        // return $request;
        $tambah = Talent::create([
            'name' => $request->name,
            'username' => $request->username,
            'followers' => $request->followers,
            'instagram_link' => $request->link_sosmed,
            'rate_card' => $request->rate_card,
            'jenis_kelamin' => $request->jenis_kelamin,
            'domisili' => $request->domisili,
            'contact_person' => $request->contact_person,
            'notes' => $request->notes
        ]);
        // return $tambah;
        Alert::success('Berhasil', 'Talent Berhasil di tambahkan');
        return redirect('admin/dashboard');
    }

    public function DataTalent()
    {
        $table = 'Talent';
        $data = Talent::all();
        // return $data;
        return view('admin.data-KOL.data-talent', compact('table','data'));
    }

    public function EditTalent($id)
    {
        $table = 'Edit Talent';
        $data = Talent::where('id',$id)->first();
        // return $data;
        return view('admin.edit-KOL.edit-talent', compact('table','data','id'));
    }

    public function EditDataTalent(Request $request, $id)
    {
        // return $request;
        $data = Talent::find($id);
        $data->update([
            'name' => $request->name,
            'username' => $request->username,
            'followers' => $request->followers,
            'instagram_link' => $request->ig_link,
            'rate_card' => $request->rate_card,
            'jenis_kelamin' => $request->jenis_kelamin,
            'domisili' => $request->domisili,
            'contact_person' => $request->contact_person,
            'notes' => $request->notes
        ]);

        Alert::success('Berhasil', 'Edit Talent Berhasil');
        return redirect('admin/data-talent');
    }

    public function HapusTalent($id)
    {
        $hapus = Talent::find($id);
        $hapus->delete();

        Alert::warning('Delete', 'Talent Berhasil di hapus');
        return back();
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login'); // Atau arahkan ke halaman lain setelah logout
    }
   
    /**
     * Show the form for creating a new resource.
     */
    public function create1()
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
