<?php 

class TreeNode{
    public $val;
    public $left;
    public $right;

    function __construct($val = 0, $left = null, $right = null){
        $this->val = $val;
        $this->left = $left;
        $this->right = $right;
    }
}

$root = new TreeNode(1);
$root->left = new TreeNode(7);
$root->right = new TreeNode(0);
$root->left->left = new TreeNode(7);
$root->left->right = new TreeNode(-8);

class Solution{
    function maxLevelSum($root){
        $queue = [$root];
        $level = 1;
        $maxSum = PHP_INT_MIN;
        $answerLevel = 1;

        While(!empty($queue)){
            $size = count($queue);
            $current_sum = 0;
            
            for($i = 0; $i < $size; $i++){
                $node = array_shift($queue);
                $current_sum += $node->val;

                if($node->left !== null){
                   $queue[] = $node->left;
                }
                if($node->right !== null){
                    $queue[] = $node->right;
                }
            }

            if($current_sum > $maxSum){
                $maxSum = $current_sum;
                $answerLevel = $level;
            }

            $level++;
        }

        return $answerLevel;
    }
}

$solution = new Solution();
$result = $solution->maxLevelSum($root);

echo "Maximum Level Sum is at Level: " . $result;