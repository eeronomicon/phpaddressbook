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

    }
?>
