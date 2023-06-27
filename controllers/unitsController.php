<?php
use models\Unit;

class unitsController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->getMessages();

        $this->_view->assign('title','Units');
        $this->_view->assign('asunto','Lista de Unidades');
        $this->_view->assign('notice','No hay unidades disponibles');
        $this->_view->assign('eldar_units', Unit::select('id','name','unit_type')->get());//select id, nombre from roles
        $this->_view->render('index');
    }

    public function create()
    {
        $this->getMessages();

        $this->_view->assign('title','Units');
        $this->_view->assign('asunto','Nueva Unidad');
       
        $this->_view->assign('unit', Session::get('data'));
        $this->_view->assign('process', "units/store");
        $this->_view->assign('send', $this->encrypt($this->getForm()));
        $this->_view->render('create');
    }

    public function store()
    {
        $this->validateForm('units/create',[
            'name' => Filter::getText('name')
        ]);
       
        $unidad = Unit::select('id')->where('name', Filter::getText('name'))->first();
       

        if ($unidad) {
            Session::set('msg_error','La unidad ingresada ya existe... intente con otra');
            $this->redirect('units/create');
        }
      
        $unidad = new Unit;
        $unidad->name = Filter::getText('name');
        $unidad->save();

    }
    public function store2(){
        $this->validateForm('units/create',[
            'unit_type' => Filter::getText('unit_type')]);
            $unidad = Unit::select('id')->where('name', Filter::getText('name'))->first();
            if ($unidad) {
                Session::set('msg_error','La unidad ingresada ya existe... intente con otra');
                $this->redirect('units/create');
            }
            $tipoUnidad = Unit::select('id')->where('unit_type', Filter::getText('unit_type'))->first();
      
        
            $tipo_unidad = new Unit;
            $tipo_unidad->unit_type = Filter::getText('unit_type');
            $tipo_unidad->save();
            Session::destroy('data');
            Session::set('msg_success', 'se ha registrado correctamente');
            $this->redirect('units');
    }

}