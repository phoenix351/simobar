<? 
namespace App\Controllers;
use CodeIgniter\Controller;
class Pages extends Controller 
{
    public function index(){
        return view('welcome_message');
    } 
    public function view($page='home'){
        if (! is_file(APPATH.'/Views/pages/'.$page.'.php'))
        {
            throw new \Codeigniter\Exceptions\PageNotFoundException($page);
        } 
        $data['title'] = ucfirst($page);
        echo view('templates/header',$data);
        echo view('pages/header',$data);
        echo view('templates/footer',$data);
        
    }
}