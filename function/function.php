<?php

class Program {
    private $countBageConcat = 0;
    private $bageconcat = '<span class="badge mx-2 text-bg-success">Bage Concat</span>';
    private $bage = '<span class="badge mx-2 text-bg-warning">Bage</span>';
    private $concat = '<span class="badge mx-2 text-bg-info">Concat</span>';
    private $switchstatus = 0;

    public function run($numIterations) {
        ob_start();
        for ($i = 1; $i <= $numIterations; $i++) {
            if ($this->countBageConcat >= 5) {
                break;
            }
            
            if ($i % 3 == 0 && $i % 5 == 0) {
                echo $this->bageconcat;
                $this->countBageConcat++;
            } else if ($i % 3 == 0) {
                if ($this->countBageConcat >= 2) {
                    $this->switchstatus = 1;
                    echo $this->concat;
                }
                else {
                    echo $this->bage;
                }
            } else if ($i % 5 == 0) {
                if ($this->countBageConcat >= 2) {
                    $this->switchstatus = 1;
                    echo $this->bage;
                }
                else {
                    echo $this->concat;
                }
            }
        }
        $output = ob_get_clean();

        if($this->countBageConcat >= 5){
            header("Location: stop.php?countBageConcat={$this->countBageConcat}&numIterations={$numIterations}");
            exit();
        }
        return array($output, $this->countBageConcat, $this->switchstatus);
    }
}

?>