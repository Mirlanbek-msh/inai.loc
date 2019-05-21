<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Blade;
use App\Models\PageCategory;
use App\Models\Contact;
use App\Models\Specialisation;
use App\Models\Program;
use Illuminate\Database\QueryException;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191); //Solved by increasing StringLength
        $this->loadHelperVariables();
        $this->loadActiveDirective();
        $this->loadStatusDirective();
        // $this->redirectHttps();
    }

    // public function redirectHttps()
    // {
    //     if(env('REDIRECT_HTTPS'))
    //     {
    //         \URL::forceScheme('https');
    //     }
    // }

    public function loadActiveDirective()
    {
        Blade::directive('active', function($expression){
            // dd($expression);
            $array = explode(', ', $expression);
            if(count($array) > 1){
                list($routeName, $routeNumber) = explode(', ', $expression);
            }else{
                $routeName = $array[0];                
                $routeNumber = 3;
            }
            return "<?php echo {$routeName} == Request::capture()->segment(intval($routeNumber)) ? 'current' : ''; ?>";
        });
    }

    public function loadStatusDirective()
    {
        Blade::directive('status', function($expression){
            // dd($expression);
            list($value) = explode(', ', $expression);
            return "<?php echo '<i class=\"status status'; echo {$value} == '1' ? '-active' : '-inactive'; echo '\"></i>'; ?>";
        });
    }


    public function loadHelperVariables()
    {
        view()->composer('*', function($view){
            $view->with('current_three', Request::capture()->segment(3));
            // $view->with('current_three', 'index');
            $view->with('lang', app()->getLocale());
            // $view->with('current_date', $this->loadLocalizedDate());
            $view->with('bachelor', $this->loadBachelor());
            $view->with('master', $this->loadMaster());
            $view->with('admission', $this->loadAdmission());
            $view->with('contact_data', $this->loadContactData());
            $view->with('internationalization', $this->loadInternationalization());
            $view->with('services', $this->loadServices());
            try{
                $view->with('bachelor_specs', $this->loadBachelorSpecialisations());
                $view->with('master_specs', $this->loadMasterSpecialisations());
            }catch(QueryException $e){
                $view->with('bachelor_specs', collect());
                $view->with('master_specs', collect());
            }
        });
    }

    public function loadContactData()
    {
        return Contact::where('status', 1)->get()->pluck('value_lang', 'name');
    }

    public function loadBachelor()
    {
        return PageCategory::where('slug', 'bachelor')->firstOrFail();
    }

    public function loadMaster()
    {
        return PageCategory::where('slug', 'master')->firstOrFail();
    }

    public function loadAdmission()
    {
        return PageCategory::where('slug', 'admission')->firstOrFail();
    }

    public function loadInternationalization()
    {
        return PageCategory::where('slug', 'internationalization')->firstOrFail();
    }

    public function loadServices()
    {
        // $r =  PageCategory::where('slug', 'services')->firstOrFail();
        // dd($r->pagesChunk());
        // dd($r->pagesChunk()->first->count(), $r->pagesChunk()->second->count());
        return PageCategory::where('slug', 'services')->firstOrFail();
    }

    public function loadBachelorSpecialisations()
    {
        $specs = Program::find(1)->specialisations;
        return $specs;
    }

    public function loadMasterSpecialisations()
    {
        $specs = Program::find(2)->specialisations;
        return $specs;
    }

    public function loadLocalizedDate()
    {
        $months = [
            1 => 'Января', 
            2 => 'Февраля', 
            3 => 'Марта', 
            4 => 'Апреля', 
            5 => 'Мая', 
            6 => 'Июня', 
            7 => 'Июля', 
            8 => 'Августа', 
            9 => 'Сентября', 
            10 => 'Октября', 
            11 => 'Ноября', 
            12 => 'Декабря'
        ];
        
        $weekDays = [
            1 => 'Понедельник', 
            2 => 'Вторник', 
            3 => 'Среда', 
            4 => 'Четверг', 
            5 => 'Пятница', 
            6 => 'Суббота', 
            7 => 'Воскресенье'
        ];
        $monthNumber = date('n');
        $weekDayNumber = date('N');
        $day = date('j');
        $year = date('Y');
        $current_date = "$weekDays[$weekDayNumber], $day $months[$monthNumber] $year";
        // dd($current_date);
        return $current_date;
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
