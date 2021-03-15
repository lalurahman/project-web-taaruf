<?php

namespace App\Helpers;

class JaccardSimilarity {
    
    public function getSimilarityCoefficient( $item1, $item2, $separator = "," ) {
       
        $item1 = array_unique(array_map('trim', explode( $separator, strtolower($item1) )));
        $item2 = array_unique(array_map('trim', explode( $separator, strtolower($item2) )));
        $arr_intersection = array_intersect( $item2, $item1 ); //adad
        $arr_union = array_unique(array_merge( $item1, $item2 ));
        $coefficient = count( $arr_intersection ) / count( $arr_union );

        return $coefficient;
    }
}
