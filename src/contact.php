<?php
    class Contact
    {

        private $contactName;
        private $contactAddress;
        private $contactPhone;

        function __construct($name, $address, $phone)
        {
            $this->contactName = $name;
            $this->contactAddress = $address;
            $this->contactPhone = $phone;
        }

        function saveContact()
        {
            array_push($_SESSION['list_of_contacts'], $this);
        }

        function getContactInfo($attributeNumber)
        {
            if ($attributeNumber == 1) {
                return $this->contactName;
            } elseif ($attributeNumber == 2) {
                return $this->contactAddress;
            } else {
                return $this->contactPhone;
            }
        }

        function setContactInfo($attributeNumber, $new_value)
        {
            if ($attributeNumber == 1) {
                $this->contactName = $new_value;
            } elseif ($attributeNumber == 2) {
                $this->contactAddress = $new_value;
            } else {
                $this->contactPhone = $new_value;
            }
        }

        static function getAll()
        {
            return $_SESSION['list_of_contacts'];
        }

        static function deleteAll()
        {
            $_SESSION['list_of_contacts'] = array();
        }
    }
?>
