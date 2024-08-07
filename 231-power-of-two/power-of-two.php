class Solution {

    /**
     * @param Integer $n
     * @return Boolean
     */
    function isPowerOfTwo($n) {
        if ($n <= 0){
            return false ;
        }
            
        return ($n & ($n-1)) == 0;
    }
}