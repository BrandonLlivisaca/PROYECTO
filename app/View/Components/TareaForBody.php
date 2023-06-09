<?php
namespace App\View\Components;
use App\Models\Tarea;
use Carbon\Carbon;
use Illuminate\View\Component;

class TareaForBody extends Component
{
    private $tarea;
    /**
     * Create a new component instance.
     * @param \App\Models\Tarea $tarea
     * @return void
     */
    public function __construct( $tarea = null )
    {
        if(is_null($tarea)){
            $tarea = Tarea::make([
                'urgencia' => 0,
                'fecha_limite' => Carbon::now(),
            ]);
        }

        $this->tarea = $tarea;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $params = [
            'tarea' => $this->tarea,
            'urgencias' => Tarea::URGENCIAS,
        ];
        return view('components.tarea-for-body', $params);
    }
}
