<?php

namespace App\Helpers;

class JaccardSimilarity {
    /**
     * Return the coefficient of two items based on Jaccard index
     * http://en.wikipedia.org/wiki/Jaccard_index
     *
     * Example:
     *
     * $tags1 = "code, php, jaccard, test, items";
     * $tags2 = "test, code";
     * echo getSimilarityCoefficient( $tags1, $tags2 ); // 0.28
     *
     * $str1 = "similarity coefficient of two items";
     * $str2 = "two items are cool";
     * echo getSimilarityCoefficient( $str1, $str2, " " ); // 0.44
     *
     * @param 	string $item1
     * @param 	string $item2
     * @param 	string $separator
     * @return 	float
     * @author 	Henrique Hohmann
     * @version     0.1
     */
    public function getSimilarityCoefficient( $item1, $item2, $separator = "," ) {
        // $item1 = explode( $separator, $item1 );
        // $item2 = explode( $separator, $item2 );
        // $arr_intersection = array_intersect( $item2, $item2 );
        // $arr_union = array_merge( $item1, $item2 );
        // $coefficient = count( $arr_intersection ) / count( $arr_union );

        // return $coefficient;

        $item1 = array_unique(array_map('trim', explode( $separator, strtolower($item1) )));
        $item2 = array_unique(array_map('trim', explode( $separator, strtolower($item2) )));
        $arr_intersection = array_intersect( $item2, $item1 );
        $arr_union = array_unique(array_merge( $item1, $item2 ));
        $coefficient = count( $arr_intersection ) / count( $arr_union );

        return $coefficient;
    }
}
