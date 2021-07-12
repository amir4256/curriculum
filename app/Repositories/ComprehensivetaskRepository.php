<?php


namespace App\Repositories;


use App\Models\Comprehensivetask;
use App\Models\Grade;
use App\Models\Result;
use App\Models\Student;
use App\Models\SubConcept;
use App\Models\SubTheme;
use App\Models\TargetConcept;
use App\Models\Taskfile;
use App\Models\Theme;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

/**
 * Class ComprehensivetaskRepository
 * @package App\Repositories
 */
class ComprehensivetaskRepository implements ComprehensivetaskRepositoryInterface
{

    public function findById($id){

        return Comprehensivetask::where('id', $id)->firstOrFail();

    }
    public function getByIdRelation($id)
    {

        return Comprehensivetask::where('id' , $id)
            ->with('grades')
            ->with('targetConcepts')
            ->with('subConcepts')
            ->with('themes')
            ->with('results')
            ->with('taskFiles')
            ->firstOrFail();
    }

    public function getAll()
    {
        $result = [];
        $comprehensivetasks = Comprehensivetask::all();
        foreach ($comprehensivetasks as $comprehensivetask) {
            $result[] = $comprehensivetask
                ->with('grades')
                ->with('targetConcepts')
                ->with('subConcepts')
                ->with('themes')
                ->with('results')
                ->with('taskFiles')
                ->get();
        }
        return $result;
    }

    public function create($request){

        $comprehensivetask = new Comprehensivetask();
        $comprehensivetask->title = $request->title;
        $comprehensivetask->subject_id = $request->subject_id;
        $comprehensivetask->subtheme = $request->subtheme;
        $comprehensivetask->description = $request->description;
        $comprehensivetask->critarias = json_encode($request->critarias);
        $comprehensivetask->keyquestions = json_encode($request->keyquestions);
        $comprehensivetask->tips = json_encode($request->tips);
        $comprehensivetask->created_by = $request->created_by;
        $comprehensivetask->user_id = $request->user_id;
        $comprehensivetask->save();


        $target_concept_ids = $request->target_concept_ids;
        foreach ($target_concept_ids as $target_concept_id) {
            DB::table('comprehensivetask_target_concept')->insert([
                "target_concept_id" => $target_concept_id,
                "comprehensivetask_id"=>$comprehensivetask->id,
            ]);
        }

        $grade_ids = $request->grade_ids;
        foreach ($grade_ids as $grade_id){
            DB::table('comprehensivetask_grade')->insert([
                "grade_id" => $grade_id,
                "comprehensivetask_id"=>$comprehensivetask->id,
            ]);
        }

        $sub_concept_ids = $request->sub_concept_ids;
        foreach ($sub_concept_ids as $sub_concept){
            DB::table('comprehensivetask_sub_concept')->insert([
                "sub_concept_id"=>$sub_concept,
                "comprehensivetask_id"=>$comprehensivetask->id,
            ]);
        }

        $theme_ids = $request->theme_ids;
        foreach ($theme_ids as $theme_id){
            DB::table('comprehensivetask_theme')->insert([
                "theme_id"=>$theme_id,
                "comprehensivetask_id"=>$comprehensivetask->id,
            ]);
        }

        $result_ids = $request->result_ids;
        foreach ($result_ids as $result_id){
            DB::table('comprehensivetask_result')->insert([
                "result_id"=>$result_id,
                "comprehensivetask_id"=>$comprehensivetask->id,
            ]);
        }

        foreach ($request->resurces as $resource){
            $path = null;
            $temp_name = null;
            if(isset($resource['link'])){
                $link = $resource['link'];
            }else{
                $link = null;
            }
            if(isset($resource['text'])){
                $text = $resource['text'];
            }else{
                $text = null;
            }
            if(isset($resource['file'])){
                $temp_name = $resource['file']->guessClientExtension();
                //TODO:public/comprehensivetask_file/{COMPERHANSIVE_ID}
                $name =  $resource['file']->store('public/comprehensivetask_file');
                $path = Storage::path("$name");
            }
            //TODO: TYPE_FILE MUST BE REMOVED IN MIGRATION
            DB::table('comprehensivetask_files')->insertGetId([
                "comprehensivetask_id"=>$comprehensivetask->id,
                "path" => $path,
                "name" => $temp_name,
                "link"=>$link,
                "text"=>$text,
            ]);

        }
        return true;
    }

   public function update($request){
        $comprehensivetask = Comprehensivetask::find($request->id);
        $comprehensivetask->title = $request->title;
        $comprehensivetask->subject_id = $request->subject_id;
        $comprehensivetask->subtheme = $request->subtheme;
        $comprehensivetask->description = $request->description;
        $comprehensivetask->critarias = json_encode($request->critarias);
        $comprehensivetask->keyquestions = json_encode($request->keyquestions);
        $comprehensivetask->tips = json_encode($request->tips);
        $comprehensivetask->created_by = $request->created_by;
        $comprehensivetask->user_id = $request->user_id;
        $comprehensivetask->save();


       $target_concept_ids = $request->target_concept_ids;

       foreach ($target_concept_ids as $target_concept_id) {
           if ($target_concept_id['action']=='delete') {
               $id = $target_concept_id['value'];
               DB::table('comprehensivetask_target_concept')
                   ->where('comprehensivetask_id',$comprehensivetask->id)
                   ->where('target_concept_id',$id)
                   ->delete();
           }
           if ($target_concept_id['action']=='add') {
               DB::table('comprehensivetask_target_concept')->insert([
                   "target_concept_id" => $target_concept_id['value'],
                   "comprehensivetask_id"=>$comprehensivetask->id,
               ]);
           }
       }

       $grade_ids = $request->grade_ids;
       foreach ($grade_ids as $grade_id) {
           if ($grade_id['action']=='delete') {
               $id = $grade_id['value'];
               DB::table('comprehensivetask_grade')
                   ->where('comprehensivetask_id',$comprehensivetask->id)
                   ->where('grade_id',$id)
                   ->delete();
           }
           if ($grade_id['action']=='add') {
               DB::table('comprehensivetask_grade')->insert([
                   "grade_id" => $grade_id['value'],
                   "comprehensivetask_id"=>$comprehensivetask->id,
               ]);
           }
       }

       $sub_concept_ids = $request->sub_concept_ids;
       foreach ($sub_concept_ids as $sub_concept_id) {
           if ($sub_concept_id['action']=='delete') {
               $id = $sub_concept_id['value'];
               DB::table('comprehensivetask_sub_concept')
                   ->where('comprehensivetask_id',$comprehensivetask->id)
                   ->where('sub_concept_id',$id)
                   ->delete();
           }
           if ($sub_concept_id['action']=='add') {
               DB::table('comprehensivetask_sub_concept')->insert([
                   "sub_concept_id" => $sub_concept_id['value'],
                   "comprehensivetask_id"=>$comprehensivetask->id,
               ]);
           }
       }


       $theme_ids = $request->theme_ids;
       foreach ($theme_ids as $theme_id) {
           if ($theme_id['action']=='delete') {
               $id = $theme_id['value'];
               DB::table('comprehensivetask_theme')
                   ->where('comprehensivetask_id',$comprehensivetask->id)
                   ->where('theme_id',$id)
                   ->delete();
           }
           if ($theme_id['action']=='add') {
               DB::table('comprehensivetask_theme')->insert([
                   "theme_id" => $theme_id['value'],
                   "comprehensivetask_id"=>$comprehensivetask->id,
               ]);
           }
       }

       $result_ids = $request->result_ids;
       foreach ($result_ids as $result_id) {
           if ($result_id['action']=='delete') {
               $id = $result_id['value'];
               DB::table('comprehensivetask_result')
                   ->where('comprehensivetask_id',$comprehensivetask->id)
                   ->where('result_id',$id)
                   ->delete();
           }
           if ($result_id['action']=='add') {
               DB::table('comprehensivetask_result')->insert([
                   "result_id" => $result_id['value'],
                   "comprehensivetask_id"=>$comprehensivetask->id,
               ]);
           }
       }

       $resurces = $request->resurces;
       foreach ($resurces as $resurce) {

           if ($resurce['action']=='delete') {
               $id = $resurce['value'];
               DB::table('comprehensivetask_file')
                   ->where('id',$id)
                   ->delete();
           }
           if ($resurce['action']=='add') {
               $temp_name = $resurce->file->guessClientExtension();
               $name = $resurce->file->store('public/comprehensivetask_file');
               $path = Storage::path("$name");
               $size = Storage::size("$name");
               $media_id = DB::table('comprehensivetask_file')->insertGetId([
                   "comprehensivetask_id" => $comprehensivetask->id,
                   "path" => $path,
                   "name" => $name,
                   "link" => $resurce->text,
                   "text" => $resurce->link
               ]);

           }

                 }
  }

    public function delete($id){

        $comprehensivetask = Comprehensivetask::where('id', $id)->firstOrFail();
        $comprehensivetask->delete();
        return true;

    }
}
