<?php
/**
 * @author Bc. Marek Fajfr <mfajfr90(at)gmail.com>
 * Created at: 12:07 13.01.2020
 */

namespace TarsagoExport\Models\Telemarketing;

use TarsagoExport\Abstracts\AbstractTransaction;
use TarsagoExport\Interfaces\ITransaction;

class Transaction extends AbstractTransaction implements ITransaction
{
    protected function headline() : string
    {
        return $out = '"iss_acct"' . $this->delimiter . '"iss_key_co"' . $this->delimiter . '"iss_name"' . $this->delimiter . '"iss_compan"' . $this->delimiter . '"iss_addr1"' . $this->delimiter . '"iss_city"' . $this->delimiter . '"iss_zip_cd"' . $this->delimiter . '"iss_phone"' . $this->delimiter . '"iss_mobile"' . $this->delimiter . '"datnar"' . $this->delimiter . '"email"' . $this->delimiter . '"barcode"' . $this->delimiter . '"campaign"' . $this->delimiter . '"mrktcode"' . $this->delimiter . '"prodcode1"' . $this->delimiter . '"prodcode2"' . $this->delimiter . '"prodcode3"' . $this->delimiter . '"prodcode4"' . $this->delimiter . '"export_type"' . $this->delimiter . '"dalyed_order"' . $this->delimiter . '"multiorder"' . $this->delimiter . '"new_name"' . $this->delimiter . '"new_addr1"' . $this->delimiter . '"new_city"' . $this->delimiter . '"new_zip_cd"' . $this->delimiter . '"new_phone"' . $this->delimiter . '"new_mobile"' . $this->delimiter . '"new_email"' . $this->delimiter . '"new_datnar"' . $this->delimiter . '"address_change"' . $this->delimiter . '"consent_tlm"' . $this->delimiter . '"consent_tarsago"' . $this->delimiter . '"consent_general"' . $this->delimiter . '"add_remark"' . $this->delimiter . '"status"' . $this->delimiter . '"status_date"' . $this->delimiter . '"operator"' . $this->delimiter . '"comment"' . $this->delimiter . '"lottery_entry"';
    }

    public function toString() : string
    {
        $string = $this->headline() . PHP_EOL;
        $string .= parent::toString();
        return $string;
    }
}