<?php

namespace App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class AdminController extends Controller
{

    public function Index(){
        $AllData= Admin::select('contact_section','fontcolor','backgroundnav','namewebsite','description','background_color','contact_name','contact','created_at','updated_at','about','namebrand','video','icon1','icon2','icon3','icon4','icon5','icon6','caption1','caption2','caption3','caption4','caption5','caption6','sliderpic1','sliderpic2','sliderpic3','sliderpic4','emailcompany','tel','fax','logocont','background')->get();
        return view('welcome',compact('AllData'));
    }
    public function LoginAdmin(){
        return view('auth\login');
    }
    public function AdminAbout(){
        $AllData=Admin::select('contact_section','fontcolor','backgroundnav','namewebsite','description','background_color','contact_name','contact','created_at','updated_at','about','namebrand','video','icon1','icon2','icon3','icon4','icon5','icon6','caption1','caption2','caption3','caption4','caption5','caption6','sliderpic1','sliderpic2','sliderpic3','sliderpic4','emailcompany','tel','fax','logocont','background')->get();
        return view('AdminAbout',compact('AllData'));
    }
    ######################################## about section ##########################
    public function updateabout(Request $request)
    {
        $editabout =  Admin::find(1);
        $editabout->about = $request->about;
        $editabout->namebrand = $request->namebrand;
        $video = $request->file('video');
        if($request->hasFile('video')) {
            $validator = Validator::make($request->all(), [
                'video' => 'max:15240',
            ]);
            if($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInput($request->all());
            }
            $video_extension = $request->video->getClientOriginalExtension();
            $video_name = time(). '.' . $video_extension;
            $path = 'imagesAndVideos/Video';
            $request->video->move($path, $video_name);
            $video = $path . '/' . $video_name;
            $editabout->video = $video_name;
        }
        $editabout->save();

        return redirect()->back()->with(['message'=>'Changes Saved']);
    }
    public function deleteabout()
    {
        $deleteabout =  Admin::find(1);
        $deleteabout->about = null;
        $deleteabout->namebrand = null;
        $deleteabout->save();
        return redirect()->back()->with(['message'=>'Changes Saved']);
    }
    public function deletevideo()
{
    $deletevideo =  Admin::find(1);
    $deletevideo->video=null;
    $deletevideo->save();
    return redirect()->back()->with(['message'=>'Changes Saved']);
}

    ######################################## about section ##########################

    ######################################## Why us section ##########################
    public function updateus(Request $request)
    {
        $editwhyus =  Admin::find(1);
        $editwhyus->icon1 = $request->icon1;
        $editwhyus->icon2 = $request->icon2;
        $editwhyus->icon3 = $request->icon3;
        $editwhyus->icon4 = $request->icon4;
        $editwhyus->icon5 = $request->icon5;
        $editwhyus->icon6 = $request->icon6;

        $editwhyus->caption1 = $request->caption1;
        $editwhyus->caption2 = $request->caption2;
        $editwhyus->caption3 = $request->caption3;
        $editwhyus->caption4 = $request->caption4;
        $editwhyus->caption5 = $request->caption5;
        $editwhyus->caption6 = $request->caption6;
        $editwhyus->save();
        return redirect()->back()->with(['message'=>'Changes Saved']);
    }
    public function Deletewhy(){
        $deletewhyus =  Admin::find(1);
        $deletewhyus->icon1 = null;
        $deletewhyus->icon2 = null;
        $deletewhyus->icon3 = null;
        $deletewhyus->icon4 = null;
        $deletewhyus->icon5 = null;
        $deletewhyus->icon6 = null;

        $deletewhyus->caption1 = null;
        $deletewhyus->caption2 = null;
        $deletewhyus->caption3 = null;
        $deletewhyus->caption4 = null;
        $deletewhyus->caption5 = null;
        $deletewhyus->caption6 = null;
        $deletewhyus->save();
        return redirect()->back()->with(['message'=>'Changes Saved']);
    }
    ######################################## why us section ##########################

    ################## Slider  ###################
    public function Adminslider(){
        $AllData=Admin::select('contact_name','contact','created_at','updated_at','about','namebrand','video','icon1','icon2','icon3','icon4','icon5','icon6','caption1','caption2','caption3','caption4','caption5','caption6','sliderpic1','sliderpic2','sliderpic3','sliderpic4','emailcompany','tel','fax','logocont','background')->get();
        return view('AdminSlider',compact('AllData'));
    }
    public function updatepic1(Request $request){
        $editpic1 =  Admin::find(1);
        $editpic1->sliderpic4 = $request->sliderpic1;
        $sliderpic1 = $request->file('sliderpic1');
        if($request->hasFile('sliderpic1')) {
            $sliderpic1_extension = $request->sliderpic1->getClientOriginalExtension();
            $sliderpic1_name = time(). '.' . $sliderpic1_extension;
            $path = 'imagesAndVideos/Picture';
            $request->sliderpic1->move($path, $sliderpic1_name);
            $editpic1->sliderpic1 = $sliderpic1_name;
            $editpic1->save();
            return redirect()->back()->with(['message'=>'Changes Saved']);
            }else{
                return redirect()->back()->with(['messageerror'=>'Please upload the file']);
             }
        }
    public function updatepic2(Request $request){
        $editpic2 =  Admin::find(1);
        $editpic2->sliderpic2 = $request->sliderpic2;
        $sliderpic2 = $request->file('sliderpic2');
        if($request->hasFile('sliderpic2')) {
            $sliderpic2_extension = $request->sliderpic2->getClientOriginalExtension();
            $sliderpic2_name = time(). '.' . $sliderpic2_extension;
            $path = 'imagesAndVideos/Picture';
            $request->sliderpic2->move($path, $sliderpic2_name);
            $editpic2->sliderpic2 = $sliderpic2_name;
            $editpic2->save();
            return redirect()->back()->with(['message'=>'Changes Saved']);
        }else{
            return redirect()->back()->with(['messageerror'=>'Please upload the file']);
        }
    }
    public function updatepic3(Request $request){
        $editpic3 =  Admin::find(1);
        $editpic3->sliderpic3 = $request->sliderpic3;
        $sliderpic3 = $request->file('sliderpic3');
        if($request->hasFile('sliderpic3')) {
            $sliderpic3_extension = $request->sliderpic3->getClientOriginalExtension();
            $sliderpic3_name = time(). '.' . $sliderpic3_extension;
            $path = 'imagesAndVideos/Picture';
            $request->sliderpic3->move($path, $sliderpic3_name);
            $editpic3->sliderpic3 = $sliderpic3_name;
            $editpic3->save();
            return redirect()->back()->with(['message'=>'Changes Saved']);
        }else{
            return redirect()->back()->with(['messageerror'=>'Please upload the file']);
        }
    }
    public function updatepic4(Request $request){
    $editpic4 =  Admin::find(1);
    $editpic4->sliderpic4 = $request->sliderpic4;
    $sliderpic4 = $request->file('sliderpic4');
    if($request->hasFile('sliderpic4')) {
        $sliderpic4_extension = $request->sliderpic4->getClientOriginalExtension();
        $sliderpic4_name = time(). '.' . $sliderpic4_extension;
        $path = 'imagesAndVideos/Picture';
        $request->sliderpic4->move($path, $sliderpic4_name);
        $editpic4->sliderpic4 = $sliderpic4_name;
        $editpic4->save();
        return redirect()->back()->with(['message'=>'Changes Saved']);
    }else{
        return redirect()->back()->with(['messageerror'=>'Please upload the file']);
    }
}

    public function deletepic1(){
        $deletepic1 =  Admin::find(1);
        $deletepic1->sliderpic1 = null;
        $deletepic1->save();
        return redirect()->back()->with(['message'=>'Changes Saved']);
    }
    public function deletepic2(){
        $deletepic2 =  Admin::find(1);
        $deletepic2->sliderpic2 = null;
        $deletepic2->save();
        return redirect()->back()->with(['message'=>'Changes Saved']);
    }
    public function deletepic3(){
    $deletepic3 =  Admin::find(1);
    $deletepic3->sliderpic3 = null;
    $deletepic3->save();
    return redirect()->back()->with(['message'=>'Changes Saved']);
    }
    public function deletepic4(){
        $deletepic4 =  Admin::find(1);
        $deletepic4->sliderpic4 = null;
        $deletepic4->save();
        return redirect()->back()->with(['message'=>'Changes Saved']);
    }
    public function deleteslider(){
        $deleteslider =  Admin::find(1);
        $deleteslider->sliderpic1 = null;
        $deleteslider->sliderpic2 = null;
        $deleteslider->sliderpic3 = null;
        $deleteslider->sliderpic4 = null;
        $deleteslider->save();
        return redirect()->back()->with(['message'=>'Changes Saved']);
    }

    public function Admincontact(){
        $AllData=Admin::select('background_color','contact_name','contact','created_at','updated_at','about','namebrand','video','icon1','icon2','icon3','icon4','icon5','icon6','caption1','caption2','caption3','caption4','caption5','caption6','sliderpic1','sliderpic2','sliderpic3','sliderpic4','emailcompany','tel','fax','logocont','background')->get();
        return view('AdminContact',compact('AllData'));
    }
    public function updatecontact(Request $request)
    {
        $editcontact =  Admin::find(1);
        $editcontact->emailcompany = $request->emailcompany;
        $editcontact->tel = $request->tel;
        $editcontact->fax = $request->fax;
        $editcontact->background_color = $request->background_color;
        $editcontact->save();
        return redirect()->back()->with(['message'=>'Changes Saved']);
    }
    public function updatelogo(Request $request){
        $logocont =  Admin::find(1);
        $logocont->logocont = $request->logocont;
        $logocont->backgroundnav=$request->backgroundnav;
        $sliderpic1 = $request->file('logocont');
        if($request->hasFile('logocont')) {
            $logocont_extension = $request->logocont->getClientOriginalExtension();
            $logocont_name = time(). '.' . $logocont_extension;
            $path = 'imagesAndVideos/Picture';
            $request->logocont->move($path, $logocont_name);
            $logocont->logocont = $logocont_name;
            $logocont->save();
            return redirect()->back()->with(['message'=>'Changes Saved']);
        }else{
            $logocont->save();
            return redirect()->back()->with(['messageerror'=>'Please upload the file']);
        }

    }
    public function deletecontactform(){
        $delcontform =  Admin::find(1);
        $delcontform->contact = null;
        $delcontform->save();
        return redirect()->back()->with(['message'=>'Changes Saved']);
    }
    public function addcontactform(){
        $addcontform =  Admin::find(1);
        $addcontform->contact = '1';

        $addcontform->save();
        return redirect()->back()->with(['message'=>'Changes Saved']);
    }
    public function delnameform(){
        $delnamecontform =  Admin::find(1);
        $delnamecontform->contact_name = null;
        $delnamecontform->save();
        return redirect()->back()->with(['message'=>'Changes Saved']);
    }
    public function addnameform(){
        $addnamecontform =  Admin::find(1);
        $addnamecontform->contact_name = '1';
        $addnamecontform->save();
        return redirect()->back()->with(['message'=>'Changes Saved']);
    }
    public function editbackground(Request $request)
    {
        $editbackfround =  Admin::find(1);
        $editbackfround->background_color = $request->background_color;
        $editbackfround->save();
        return redirect()->back()->with(['message'=>'Changes Saved']);
    }


    public function Adminpage(){
        $AllData=Admin::select('namewebsite','description','background_color','contact_name','contact','created_at','updated_at','about','namebrand','video','icon1','icon2','icon3','icon4','icon5','icon6','caption1','caption2','caption3','caption4','caption5','caption6','sliderpic1','sliderpic2','sliderpic3','sliderpic4','emailcompany','tel','fax','logocont','background')->get();
        return view('AdminFullpage',compact('AllData'));
    }

    public function updatepage(Request $request)
    {
            $updatepage =  Admin::find(1);
            $updatepage->namewebsite = $request->namewebsite;
            $updatepage->fontcolor=$request->fontcolor;
            $updatepage->description = $request->description;
            $video = $request->file('background');
            $background_extension = $request->background->getClientOriginalExtension();
            $background_name = time(). '.' . $background_extension;
            $path = 'public/';
            $request->background->move($path, $background_name);
            $background = $path . '/' . $background_name;
            $updatepage->background = $background_name;
            $updatepage->save();
        return redirect()->back()->with(['message'=>'Changes Saved']);
    }
    public function deletenav(){
        $delnav =  Admin::find(1);
        $delnav->logocont = null;
        $delnav->save();
        return redirect()->back()->with(['message'=>'Changes Saved']);
    }
    public function delcontent(){
        $delcontent =  Admin::find(1);
        $delcontent->namewebsite = null;
        $delcontent->description = null;
        $delcontent->save();
        return redirect()->back()->with(['message'=>'Changes Saved']);
    }
    public function delcontactsec(){
        $delcontactsec=Admin::find(1);
        $delcontactsec->contact_section=null;
        $delcontactsec->save();
        return redirect()->back()->with(['message'=>'Changes Saved']);
    }
    public function showcontact(){
        $delcontactsec=Admin::find(1);
        $delcontactsec->contact_section='show';
        $delcontactsec->save();
        return redirect()->back()->with(['message'=>'Changes Saved']);
    }
}
