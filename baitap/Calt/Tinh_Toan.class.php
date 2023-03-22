<?php
    class Tinh_Toan{
        public $Phep_tinh;
        public $So_1;
        public $So_2;


        public function __construct(string $Phep_tinh,int $So_1, int $So_2)
        {
            $this->Phep_tinh=$Phep_tinh;
            $this->So_1=$So_1;
            $this->So_2=$So_2;
        }

        public function Tinh(){
            switch ($this->Phep_tinh) {
                case '+':
                    $Kq=$this->So_1 + $this->So_2;

                    return $Kq;
                    break;
                case '-':
                        $Kq=$this->So_1 - $this->So_2;
                        return $Kq;
                        break;
                case '*':
                            $Kq=$this->So_1 * $this->So_2;
                            return $Kq;
                            break;
                case '/':
                                $Kq=$this->So_1 / $this->So_2;
                                return $Kq;
                                break;
                                        
                default:
                    return "Số không xác định";
                    break;
            }
        }
    }
