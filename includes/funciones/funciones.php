<?php
    function productos_json(&$boletos,&$camisas=0,&$etiquetas=0){
        $dias=array(0=>'pase_un_dia',1=>'pase_todos_dias',2=>'pase_dos_dias');
        $total_boletos=array_combine($dias,$boletos);
        $json=array();

        foreach ($total_boletos as $key => $boletos) :
            if((int)$boletos > 0 ){
                $json[$key]=(int)$boletos;
            }
        endforeach;

        $camisas=(int) $camisas;
        if($camisas>0){
            $json['camisas']=$camisas;
        }
        $etiquetas=(int)$etiquetas;
        if($etiquetas>0){
            $json['etiquetas']=$etiquetas;
        }
        return json_encode($json);
    }
    function eventos_json(&$eventos){
        $eventoJson=array();
        foreach ($eventos as $evento):
             $eventoJson['eventos'][]=$evento;
        endforeach;
        return json_encode($eventoJson);
    }
