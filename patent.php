<?php

function calValue($Alpha, $Beta, $Gama, $data){}//使用三次指数平滑法计算当前参数值组合下的预测值
function calBias($res, $data){};//计算当前预测值和实际值的误差

$data;//用于预测的数据
$accuracy;//用户设定的精度,0.1, 0.01...
$res;//预测数据的结果
$currentA = 0.1;//当前精度, 初始值为0.1
$bestAlpha = 0;//初始最佳参数值
$bestBeta = 0;//初始最佳参数值
$bestGama = 0;//初始最佳参数值
$min;//最小误差值
$minPara;//最小误差参数组合

//三个参数初始值
$Alpha = 0.1;
$Beta = 0.1;
$Gama = 0.1;


$res = calValue($Alpha, $Beta, $Gama, $data);//先计算下初始参数值的预测值
$min = calBias($res, $data);//将初始参数值的预测值误差设为最小误差值
$minPara = ['Alpha' => $Alpha, 'Beta' => $Beta, 'Gama' => $Gama];

for(; $currentA >= $accuracy; $currentA *= 0.1){
    for(; $Alpha < $bestAlpha + $currentA * 0.1; $Alpha += $currentA){
        for(; $Beta < $bestBeta + $currentA * 0.1; $Beta += $currentA){
            for(; $Gama < $bestGama + $currentA * 0.1; $Gama += $currentA){
                $res = calValue($Alpha, $Beta, $Gama, $data);//计算当前参数值的预测值
                $temp = calBias($res, $data);
                if($temp < $min){
                    $min = $temp;
                    $minPara = ['Alpha' => $Alpha, 'Beta' => $Beta, 'Gama' => $Gama];
                }
            }
        }
    }
}

return ['min' => $min, 'para' => $minPara];
