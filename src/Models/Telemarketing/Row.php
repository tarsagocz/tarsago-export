<?php
/**
 * @author Bc. Marek Fajfr <mfajfr90(at)gmail.com>
 * Created at: 11:11 13.01.2020
 */

namespace TarsagoExport\Models\Telemarketing;

use Faker\Factory;
use Faker\Generator;
use Faker\Provider\cs_CZ\Address;
use Faker\Provider\cs_CZ\PhoneNumber;
use TarsagoExport\Abstracts\AbstractRow;
use TarsagoExport\Interfaces\IRow;

class Row extends AbstractRow
{
    protected $iss_acct;
    protected $iss_key_co;
    protected $iss_name;
    protected $iss_compan;
    protected $iss_addr1;
    protected $iss_city;
    protected $iss_zip_cd;
    protected $iss_phone;
    protected $iss_mobile;
    protected $datnar;
    protected $email;
    protected $barcode;
    protected $campaign;
    protected $mrktcode;
    protected $prodcode1;
    protected $prodcode2;
    protected $prodcode3;
    protected $prodcode4;
    protected $export_type;
    protected $delayed_order;
    protected $multiorder;
    protected $new_name;
    protected $new_addr1;
    protected $new_city;
    protected $new_zip_cd;
    protected $new_phone;
    protected $new_mobile;
    protected $new_email;
    protected $new_datnar;
    protected $address_change;
    protected $consent_tlm;
    protected $consent_tarsago;
    protected $consent_general;
    protected $add_remark;
    protected $status;
    protected $status_date;
    protected $operator;
    protected $comment;
    protected $lottery_entry;

    /**
     * Row constructor.
     * @param $iss_acct
     * @param $iss_key_co
     * @param $iss_name
     * @param $iss_compan
     * @param $iss_addr1
     * @param $iss_city
     * @param $iss_zip_cd
     * @param $iss_phone
     * @param $iss_mobile
     * @param $datnar
     * @param $email
     * @param $barcode
     * @param $campaign
     * @param $mrktcode
     * @param $prodcode1
     * @param $prodcode2
     * @param $prodcode3
     * @param $prodcode4
     * @param $export_type
     * @param $delayed_order
     * @param $multiorder
     * @param $new_name
     * @param $new_addr1
     * @param $new_city
     * @param $new_zip_cd
     * @param $new_phone
     * @param $new_mobile
     * @param $new_email
     * @param $new_datnar
     * @param $address_change
     * @param $consent_tlm
     * @param $consent_tarsago
     * @param $consent_general
     * @param $add_remark
     * @param $status
     * @param $status_date
     * @param $operator
     * @param $comment
     * @param $lottery_entry
     */
    public function __construct($iss_acct, $iss_key_co, $iss_name, $iss_compan, $iss_addr1, $iss_city, $iss_zip_cd, $iss_phone, $iss_mobile, $datnar, $email, $barcode, $campaign, $mrktcode, $prodcode1, $prodcode2, $prodcode3, $prodcode4, $export_type, $delayed_order, $multiorder, $new_name, $new_addr1, $new_city, $new_zip_cd, $new_phone, $new_mobile, $new_email, $new_datnar, $address_change, $consent_tlm, $consent_tarsago, $consent_general, $add_remark, $status, $status_date, $operator, $comment, $lottery_entry)
    {
        $this->iss_acct = $iss_acct;
        $this->iss_key_co = $iss_key_co;
        $this->iss_name = $iss_name;
        $this->iss_compan = $iss_compan;
        $this->iss_addr1 = $iss_addr1;
        $this->iss_city = $iss_city;
        $this->iss_zip_cd = $iss_zip_cd;
        $this->iss_phone = $iss_phone;
        $this->iss_mobile = $iss_mobile;
        $this->datnar = $datnar;
        $this->email = $email;
        $this->barcode = $barcode;
        $this->campaign = $campaign;
        $this->mrktcode = $mrktcode;
        $this->prodcode1 = $prodcode1;
        $this->prodcode2 = $prodcode2;
        $this->prodcode3 = $prodcode3;
        $this->prodcode4 = $prodcode4;
        $this->export_type = $export_type;
        $this->delayed_order = $delayed_order;
        $this->multiorder = $multiorder;
        $this->new_name = $new_name;
        $this->new_addr1 = $new_addr1;
        $this->new_city = $new_city;
        $this->new_zip_cd = $new_zip_cd;
        $this->new_phone = $new_phone;
        $this->new_mobile = $new_mobile;
        $this->new_email = $new_email;
        $this->new_datnar = $new_datnar;
        $this->address_change = $address_change;
        $this->consent_tlm = $consent_tlm;
        $this->consent_tarsago = $consent_tarsago;
        $this->consent_general = $consent_general;
        $this->add_remark = $add_remark;
        $this->status = $status;
        $this->status_date = $status_date;
        $this->operator = $operator;
        $this->comment = $comment;
        $this->lottery_entry = $lottery_entry;
    }

    public function toString($delimiter = ';') {
        $row = '"' . $this->iss_acct . '"' . $delimiter . '"' . $this->iss_key_co . '"' . $delimiter . '"' . $this->iss_name . '"' . $delimiter . '"' . $this->iss_compan . '"' . $delimiter . '"' . $this->iss_addr1
            . '"' . $delimiter . '"' . $this->iss_city . '"' . $delimiter . '"' . $this->iss_zip_cd . '"' . $delimiter . '"' . $this->iss_phone . '"' . $delimiter . '"' . $this->iss_mobile . '"' . $delimiter . '"' . $this->datnar
            . '"' . $delimiter . '"' . $this->email . '"' . $delimiter . '"' . $this->barcode . '"' . $delimiter . '"' . $this->campaign . '"' . $delimiter . '"' . $this->mrktcode . '"' . $delimiter . '"' . $this->prodcode1
            . '"' . $delimiter . '"' . $this->prodcode2 . '"' . $delimiter . '"' . $this->prodcode3 . '"' . $delimiter . '"' . $this->prodcode4 . '"' . $delimiter . '"' . $this->export_type . '"' . $delimiter . '"' . $this->delayed_order
            . '"' . $delimiter . '"' . $this->multiorder . '"' . $delimiter . '"' . $this->new_name . '"' . $delimiter . '"' . $this->new_addr1 . '"' . $delimiter . '"' . $this->new_city . '"' . $delimiter . '"' . $this->new_zip_cd
            . '"' . $delimiter . '"' . $this->new_phone . '"' . $delimiter . '"' . $this->new_mobile . '"' . $delimiter . '"' . $this->new_email . '"' . $delimiter . '"' . $this->new_datnar . '"' . $delimiter . '"' . $this->address_change
            . '"' . $delimiter . '"' . $this->consent_tlm . '"' . $delimiter . '"' . $this->consent_tarsago . '"' . $delimiter . '"' . $this->consent_general . '"' . $delimiter . '"' . $this->add_remark . '"' . $delimiter . '"' . $this->status
            . '"' . $delimiter . '"' . $this->status_date . '"' . $delimiter . '"' . $this->operator . '"' . $delimiter . '"' . $this->comment . '"' . $delimiter . '"' . $this->lottery_entry . '"';
        return $row;
    }

    public static function createExample($params = [])
    {
        $faker = Factory::create('cs_CZ');
        return new self(
            array_key_exists('iss_acct', $params) ? $params['iss_acct'] : $faker->numberBetween(100000, 999999),
            array_key_exists('iss_key_co', $params) ? $params['iss_key_co'] : $faker->numberBetween(100000, 999999),
            array_key_exists('iss_name', $params) ? $params['iss_name'] : $faker->name,
            array_key_exists('iss_compan', $params) ? $params['iss_compan'] : $faker->company,
            array_key_exists('iss_addr1', $params) ? $params['iss_addr1'] : $faker->streetAddress,
            array_key_exists('iss_city', $params) ? $params['iss_city'] : $faker->city,
            array_key_exists('iss_zip_cd', $params) ? $params['iss_zip_cd'] : $faker->numberBetween(10000, 99999),
            array_key_exists('iss_phone', $params) ? $params['iss_phone'] : $faker->e164PhoneNumber,
            array_key_exists('iss_acct', $params) ? $params['iss_acct'] : $faker->e164PhoneNumber,
            array_key_exists('datnar', $params) ? $params['datnar'] : $faker->date,
            array_key_exists('email', $params) ? $params['email'] : $faker->email,
            array_key_exists('barcode', $params) ? $params['barcode'] : $faker->ean8,
            array_key_exists('campaign', $params) ? $params['campaign'] : $faker->numberBetween(100000, 999999),
            array_key_exists('mrktcode', $params) ? $params['mrktcode'] : $faker->numberBetween(100000, 999999),
            array_key_exists('prodcode1', $params) ? $params['prodcode1'] : $faker->numberBetween(100000, 999999),
            array_key_exists('prodcode2', $params) ? $params['prodcode2'] : $faker->numberBetween(100000, 999999),
            array_key_exists('prodcode3', $params) ? $params['prodcode3'] : $faker->numberBetween(100000, 999999),
            array_key_exists('prodcode4', $params) ? $params['prodcode4'] : $faker->numberBetween(100000, 999999),
            array_key_exists('iss_name', $params) ? $params['iss_name'] : $faker->boolean,
            array_key_exists('iss_name', $params) ? $params['iss_name'] : $faker->boolean,
            array_key_exists('iss_name', $params) ? $params['iss_name'] : $faker->boolean,
            array_key_exists('new_name', $params) ? $params['new_name'] : $faker->name,
            array_key_exists('new_addr1', $params) ? $params['new_addr1'] : $faker->streetAddress,
            array_key_exists('new_city', $params) ? $params['new_city'] : $faker->city,
            array_key_exists('new_zip_cd', $params) ? $params['new_zip_cd'] : $faker->numberBetween(10000, 99999),
            array_key_exists('new_phone', $params) ? $params['new_phone'] : $faker->e164PhoneNumber,
            array_key_exists('new_mobile', $params) ? $params['new_mobile'] : $faker->e164PhoneNumber,
            array_key_exists('new_email', $params) ? $params['new_email'] : $faker->email,
            array_key_exists('new_datnar', $params) ? $params['new_datnar'] : $faker->date,
            array_key_exists('address_change', $params) ? $params['address_change'] : $faker->boolean,
            array_key_exists('consent_tlm', $params) ? $params['consent_tlm'] : $faker->boolean,
            array_key_exists('consent_tarsago', $params) ? $params['consent_tarsago'] : $faker->boolean,
            array_key_exists('consent_general', $params) ? $params['consent_general'] : $faker->boolean,
            array_key_exists('add_remark', $params) ? $params['add_remark'] : $faker->boolean,
            array_key_exists('status', $params) ? $params['status'] : $faker->boolean,
            array_key_exists('status_date', $params) ? $params['status_date'] : $faker->date,
            array_key_exists('iss_name', $params) ? $params['iss_name'] : $faker->name,
            array_key_exists('comment', $params) ? $params['comment'] : $faker->sentence,
            array_key_exists('lottery_entry', $params) ? $params['lottery_entry'] : $faker->boolean
        );
    }
}