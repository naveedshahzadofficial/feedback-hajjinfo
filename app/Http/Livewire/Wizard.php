<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class Wizard extends Component
{
    public $currentStep = 1;
    // public $name, $amount, $description, $status = 1, $stock;
    public $successMessage = '';
    public $name,
    $passport_no,
    $hform_no,
    $maktab_no,
    $building_no,
    $pak_mob_no,
    //step2
    $hform_sbmt_qual,
    $mra_info_qual,
    $is_obt_train,
    $obt_train_qual,
    $camp_fac_qual,
    $is_rec_hcnic,
    $is_rec_logtag,
    $is_rec_infomat,
    $obt_infomat_qual,
    $is_rec_ticpasvis,
    //step3
    $pairp_fac,
    $pair_line,
    $pairl_qual,
    $is_dep_ontime,
    $pairl_staf_beh,
    $is_isbtomakh,
    //step4
    $mk_living_qual,
    $mk_lift_qual,
    $mk_wifi_qual,
    $mk_rmclean_qual,
    $mk_genclean_qual,
    $mk_bathclean_qual,
    $mk_staff_beh,
    $mk_room_mem_qty,
    //step5
    $mk_fd_place,
    $mk_fd_quality,
    $mk_fd_taste,
    $mk_fd_fresh,
    $mk_fd_qty,
    $mk_fd_staf_beh,
    //step6
    $mk_lug_trans_qual,
    $jd_to_mk_tr_fac,
    $room_to_hrm_trans_qual,
    $mk_to_md_tr_qual,
    $mk_busses_avail,
    $mk_busses_cond,
    $mk_busses_aircond,
    $mk_busses_staff_beh,
    //step7
    $md_living_qual,
    $md_lift_qual,
    $md_wifi_qual,
    $md_rmclean_qual,
    $md_genclean_qual,
    $md_bathclean_qual,
    $md_staff_beh,
    $md_room_mem_qty,
    //step8
    $md_fd_place,
    $md_fd_quality,
    $md_fd_taste,
    $md_fd_fresh,
    $md_fd_qty,
    $md_fd_staf_beh,
    //step9
    $mdair_to_living_trans_qual,
    $md_lug_trans_qual,
    $liv_to_hrm_tr_fac,
    $md_to_mk_tr_fac,
    $md_busses_avail,
    $md_busses_cond,
    $md_busses_aircond,
    $md_busses_staff_beh,
    //step10
    $is_riaz_ul_jan_ind_or_grp,
    $riaz_ul_jan_qual,
    $riaz_ul_by_assis_qual,
    $is_40prayers,
    //step11
    $is_mna_to_arfat_train,
    $mna_to_arfat_train_qual,
    $is_mna_to_arfat_bus,
    $mna_to_arfat_bus_qual,
    $is_mktb_to_mshair_ontime,
    $mna_all_fac_qual,
    $arfat_all_fac_qual,
    $mna_arfat_fd_qual,
    //step12
    $pk_hos_disp_fac,
    $doc_para_beh,
    $med_avail,
    $ambul_avail,
    //step13
    $phm_cont_serv_fac,
    $phm_compl_serv_fac,
    $phm_lug_lost_serv,
    $phm_hos_disp_fac,
    $phm_hrm_guid_fac,
    $haj_assis_serv,
    $is_phm_call_fac,
    $phm_call_qual,
    $is_phm_gift,
    $phm_overall_fac,
    $is_again_gov_haj_schem,
    //step14
    $arrangments_suggest,
    $date_form_sbmt,
    $haji_signature;
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function render()
    {
        return view('livewire.wizard');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function firstStepSubmit()
    {
        $validatedData = $this->validate([
            'name' => 'required|string',
            'passport_no' => 'required|numeric',
            'hform_no' => 'required|numeric',
            'maktab_no' => 'required|numeric',
            'building_no' => 'required|numeric',
            'pak_mob_no' => 'required|string',
        ], [
            'name.required' => 'This field is required.',
            'passport_no.required' => 'This field is required.',
            'hform_no.required' => 'This field is required.',
            'maktab_no.required' => 'This field is required.',
            'building_no.required' => 'This field is required.',
            'pak_mob_no.required' => 'This field is required.',
        ]);

        $this->currentStep = 2;
    }


    /**
     * Write code on Method
     *
     * @return response()
     */
    public function secondStepSubmit()
    {
        $validatedData = $this->validate([
            'hform_sbmt_qual' => 'required|numeric',
            'mra_info_qual' => 'required|numeric',
            'is_obt_train' => ['required', 'in:0,1'],
            'obt_train_qual' => 'required|numeric',
            'camp_fac_qual' => 'required|numeric',
            'is_rec_hcnic' => ['required', 'in:0,1'],
            'is_rec_logtag' => ['required', 'in:0,1'],
            'is_rec_infomat' => ['required', 'in:0,1'],
            'obt_infomat_qual' => 'required|numeric',
            'is_rec_ticpasvis' => ['required', 'in:0,1'],
        ], [
            'hform_sbmt_qual.required' => 'This field is required.',
            'mra_info_qual.required' => 'This field is required.',
            'is_obt_train.required' => 'This field is required.',
            'obt_train_qual.required' => 'This field is required.',
            'camp_fac_qual.required' => 'This field is required.',
            'is_rec_hcnic.required' => 'This field is required.',
            'is_rec_logtag.required' => 'This field is required.',
            'is_rec_infomat.required' => 'This field is required.',
            'obt_infomat_qual.required' => 'This field is required.',
            'is_rec_ticpasvis.required' => 'This field is required.',
        ]);

        $this->currentStep = 3;
    }


    /**
     * Write code on Method
     *
     * @return response()
     */
    public function thirdStepSubmit()
    {
        $validatedData = $this->validate([
            'pairp_fac' => 'required|numeric',
            'pair_line' => ['required', 'string', 'in:pia,saudi,serene,airblue'],
            'pairl_qual' => 'required|numeric',
            'is_dep_ontime' => ['required', 'in:0,1'],
            'pairl_staf_beh' => 'required|numeric',
            'is_isbtomakh' => ['required', 'in:0,1'],
        ], [
            'pairp_fac.required' => 'This field is required.',
            'pair_line.required' => 'This field is required.',
            'pairl_qual.required' => 'This field is required.',
            'is_dep_ontime.required' => 'This field is required.',
            'pairl_staf_beh.required' => 'This field is required.',
            'is_isbtomakh.required' => 'This field is required.',
        ]);
        $this->currentStep = 4;
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function fourthStepSubmit()
    {
        $validatedData = $this->validate([

            'mk_living_qual' => 'required|numeric',
            'mk_lift_qual' => 'required|numeric',
            'mk_wifi_qual' => 'required|numeric',
            'mk_rmclean_qual' => 'required|numeric',
            'mk_genclean_qual' => 'required|numeric',
            'mk_bathclean_qual' => 'required|numeric',
            'mk_staff_beh' => 'required|numeric',
            'mk_room_mem_qty' => ['required', 'string', 'in:2-3,4-5,6-7,more than 7'],
        ], [
            'mk_living_qual.required' => 'This field is required.',
            'mk_lift_qual.required' => 'This field is required.',
            'mk_wifi_qual.required' => 'This field is required.',
            'mk_rmclean_qual.required' => 'This field is required.',
            'mk_genclean_qual.required' => 'This field is required.',
            'mk_bathclean_qual.required' => 'This field is required.',
            'mk_staff_beh.required' => 'This field is required.',
            'mk_room_mem_qty.required' => 'This field is required.',
        ]);
        $this->currentStep = 5;
    }


    /**
     * Write code on Method
     *
     * @return response()
     */
    public function fifthStepSubmit()
    {
        $validatedData = $this->validate([
            'mk_fd_place' => 'required|numeric',
            'mk_fd_quality' => 'required|numeric',
            'mk_fd_taste' => 'required|numeric',
            'mk_fd_fresh' => 'required|numeric',
            'mk_fd_qty' => 'required|numeric',
            'mk_fd_staf_beh' => 'required|numeric',
        ], [
            'mk_fd_place.required' => 'This field is required',
            'mk_fd_quality.required' => 'This field is required',
            'mk_fd_taste.required' => 'This field is required',
            'mk_fd_fresh.required' => 'This field is required',
            'mk_fd_qty.required' => 'This field is required',
            'mk_fd_staf_beh.required' => 'This field is required',
        ]);
        $this->currentStep = 6;
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function sixthStepSubmit()
    {
        $validatedData = $this->validate([
            'mk_lug_trans_qual' => 'required|numeric',
            'jd_to_mk_tr_fac' => 'required|numeric',
            'room_to_hrm_trans_qual' => 'required|numeric',
            'mk_to_md_tr_qual' => 'required|numeric',
            'mk_busses_avail' => 'required|numeric',
            'mk_busses_cond' => 'required|numeric',
            'mk_busses_aircond' => 'required|numeric',
            'mk_busses_staff_beh' => 'required|numeric',
        ], [
            'mk_lug_trans_qual.required' => 'This field is required',
            'jd_to_mk_tr_fac.required' => 'This field is required',
            'room_to_hrm_trans_qual.required' => 'This field is required',
            'mk_to_md_tr_qual.required' => 'This field is required',
            'mk_busses_avail.required' => 'This field is required',
            'mk_busses_cond.required' => 'This field is required',
            'mk_busses_aircond.required' => 'This field is required',
            'mk_busses_staff_beh.required' => 'This field is required',
        ]);
        $this->currentStep = 7;
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function seventhStepSubmit()
    {
        $validatedData = $this->validate([
            'md_living_qual' => 'required|numeric',
            'md_lift_qual' => 'required|numeric',
            'md_wifi_qual' => 'required|numeric',
            'md_rmclean_qual' => 'required|numeric',
            'md_genclean_qual' => 'required|numeric',
            'md_bathclean_qual' => 'required|numeric',
            'md_staff_beh' => 'required|numeric',
            'md_room_mem_qty' => 'required|string',
        ], [
            'md_living_qual.required' => 'This field is required',
            'md_lift_qual.required' => 'This field is required',
            'md_wifi_qual.required' => 'This field is required',
            'md_rmclean_qual.required' => 'This field is required',
            'md_genclean_qual.required' => 'This field is required',
            'md_bathclean_qual.required' => 'This field is required',
            'md_staff_beh.required' => 'This field is required',
            'md_room_mem_qty.required' => 'This field is required',
        ]);
        $this->currentStep = 8;
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function eighthStepSubmit()
    {
        $validatedData = $this->validate([
            'md_fd_place' => 'required|numeric',
            'md_fd_quality' => 'required|numeric',
            'md_fd_taste' => 'required|numeric',
            'md_fd_fresh' => 'required|numeric',
            'md_fd_qty' => 'required|numeric',
            'md_fd_staf_beh' => 'required|numeric',
        ], [
            'md_fd_place.required' => 'This field is required',
            'md_fd_quality.required' => 'This field is required',
            'md_fd_taste.required' => 'This field is required',
            'md_fd_fresh.required' => 'This field is required',
            'md_fd_qty.required' => 'This field is required',
            'md_fd_staf_beh.required' => 'This field is required',
        ]);
        $this->currentStep = 9;
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function ninethStepSubmit()
    {
        $validatedData = $this->validate([
            'mdair_to_living_trans_qual' => 'required|numeric',
            'md_lug_trans_qual' => 'required|numeric',
            'liv_to_hrm_tr_fac' => 'required|numeric',
            'md_to_mk_tr_fac' => 'required|numeric',
            'md_busses_avail' => 'required|numeric',
            'md_busses_cond' => 'required|numeric',
            'md_busses_aircond' => 'required|numeric',
            'md_busses_staff_beh' => 'required|numeric',
        ], [
            'mdair_to_living_trans_qual.required' => 'This field is required.',
            'md_lug_trans_qual.required' => 'This field is required.',
            'liv_to_hrm_tr_fac.required' => 'This field is required.',
            'md_to_mk_tr_fac.required' => 'This field is required.',
            'md_busses_avail.required' => 'This field is required.',
            'md_busses_cond.required' => 'This field is required.',
            'md_busses_aircond.required' => 'This field is required.',
            'md_busses_staff_beh.required' => 'This field is required.',
        ]);
        $this->currentStep = 10;
    }


    /**
     * Write code on Method
     *
     * @return response()
     */
    public function tenthStepSubmit()
    {
        $validatedData = $this->validate([
            'is_riaz_ul_jan_ind_or_grp' => ['required', 'in:indiv,grp'],
            'riaz_ul_jan_qual' => 'required|numeric',
            'riaz_ul_by_assis_qual' => 'required|numeric',
            'is_40prayers' => ['required', 'in:0,1'],
        ], [
            'is_riaz_ul_jan_ind_or_grp.required' => 'This field is required',
            'is_riaz_ul_jan_ind_or_grp.in' => 'This field is required',
            'riaz_ul_jan_qual.required' => 'This field is required',
            'riaz_ul_by_assis_qual.required' => 'This field is required',
            'is_40prayers.required' => 'This field is required',
        ]);
        $this->currentStep = 11;
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function eleventhStepSubmit()
    {
        $validatedData = $this->validate([
            'is_mna_to_arfat_train' => ['required', 'in:0,1'],
            'mna_to_arfat_train_qual' => 'required|numeric',
            'is_mna_to_arfat_bus' => ['required', 'in:0,1'],
            'mna_to_arfat_bus_qual' => 'required|numeric',
            'is_mktb_to_mshair_ontime' => ['required', 'in:0,1'],
            'mna_all_fac_qual' => 'required|numeric',
            'arfat_all_fac_qual' => 'required|numeric',
            'mna_arfat_fd_qual' => 'required|numeric',
        ], [
            'is_mna_to_arfat_train.required' => 'This field is required',
            'mna_to_arfat_train_qual.required' => 'This field is required',
            'is_mna_to_arfat_bus.required' => 'This field is required',
            'mna_to_arfat_bus_qual.required' => 'This field is required',
            'is_mktb_to_mshair_ontime.required' => 'This field is required',
            'mna_all_fac_qual.required' => 'This field is required',
            'arfat_all_fac_qual.required' => 'This field is required',
            'mna_arfat_fd_qual.required' => 'This field is required',

        ]);
        $this->currentStep = 12;
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function twelvethStepSubmit()
    {
        $validatedData = $this->validate([
            'pk_hos_disp_fac' => 'required|numeric',
            'doc_para_beh' => 'required|numeric',
            'med_avail' => 'required|numeric',
            'ambul_avail' => 'required|numeric',
        ], [
            'pk_hos_disp_fac.required' => 'This field is required.',
            'doc_para_beh.required' => 'This field is required.',
            'med_avail.required' => 'This field is required.',
            'ambul_avail.required' => 'This field is required.',
        ]);
        $this->currentStep = 13;
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function thirteenthStepSubmit()
    {
        $validatedData = $this->validate([
            'phm_cont_serv_fac' => 'required|numeric',
            'phm_compl_serv_fac' => 'required|numeric',
            'phm_lug_lost_serv' => 'required|numeric',
            'phm_hos_disp_fac' => 'required|numeric',
            'phm_hrm_guid_fac' => 'required|numeric',
            'haj_assis_serv' => 'required|numeric',
            'is_phm_call_fac' => ['required', 'in:0,1'],
            'phm_call_qual' => 'required|numeric',
            'is_phm_gift' => ['required', 'in:0,1'],
            'phm_overall_fac' => 'required|numeric',
            'is_again_gov_haj_schem' => ['required', 'in:0,1'],
        ], [
            'phm_cont_serv_fac.required' => 'This field is required.',
            'phm_compl_serv_fac.required' => 'This field is required.',
            'phm_lug_lost_serv.required' => 'This field is required.',
            'phm_hos_disp_fac.required' => 'This field is required.',
            'phm_hrm_guid_fac.required' => 'This field is required.',
            'haj_assis_serv.required' => 'This field is required.',
            'is_phm_call_fac.required' => 'This field is required.',
            'phm_call_qual.required' => 'This field is required.',
            'is_phm_gift.required' => 'This field is required.',
            'phm_overall_fac.required' => 'This field is required.',
            'is_again_gov_haj_schem.required' => 'This field is required.',

        ]);
        $this->currentStep = 14;
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function fourteenthStepSubmit()
    {
        $validatedData = $this->validate([
            'arrangments_suggest' => 'required|string',
            'date_form_sbmt' => 'required|string',
            'haji_signature' => 'required|string',
        ], [
            'arrangments_suggest.required' => 'This field is required.',
            'date_form_sbmt.required' => 'This field is required.',
            'haji_signature.required' => 'This field is required.',
        ]);
        $this->currentStep = 15;
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function submitForm()
    {
        Product::create([
            //step1
            'name' => $this->name,
            'passport_no' => $this->passport_no,
            'hform_no' => $this->hform_no,
            'maktab_no' => $this->maktab_no,
            'building_no' => $this->building_no,
            'pak_mob_no' => $this->pak_mob_no,
            //step2
            'hform_sbmt_qual' => $this->hform_sbmt_qual,
            'mra_info_qual' => $this->mra_info_qual,
            'is_obt_train' => $this->is_obt_train,
            'obt_train_qual' => $this->obt_train_qual,
            'camp_fac_qual' => $this->camp_fac_qual,
            'is_rec_hcnic' => $this->is_rec_hcnic,
            'is_rec_logtag' => $this->is_rec_logtag,
            'is_rec_infomat' => $this->is_rec_infomat,
            'obt_infomat_qual' => $this->obt_infomat_qual,
            'is_rec_ticpasvis' => $this->is_rec_ticpasvis,
            //step3
            'pairp_fac' => $this->pairp_fac,
            'pair_line' => $this->pair_line,
            'pairl_qual' => $this->pairl_qual,
            'is_dep_ontime' => $this->is_dep_ontime,
            'pairl_staf_beh' => $this->pairl_staf_beh,
            'is_isbtomakh' => $this->is_isbtomakh,
            //step4
            'mk_living_qual' => $this->mk_living_qual,
            'mk_lift_qual' => $this->mk_lift_qual,
            'mk_wifi_qual' => $this->mk_wifi_qual,
            'mk_rmclean_qual' => $this->mk_rmclean_qual,
            'mk_genclean_qual' => $this->mk_genclean_qual,
            'mk_bathclean_qual' => $this->mk_bathclean_qual,
            'mk_staff_beh' => $this->mk_staff_beh,
            'mk_room_mem_qty' => $this->mk_room_mem_qty,
            //step5
            'mk_fd_place' => $this->mk_fd_place,
            'mk_fd_quality' => $this->mk_fd_quality,
            'mk_fd_taste' => $this->mk_fd_taste,
            'mk_fd_fresh' => $this->mk_fd_fresh,
            'mk_fd_qty' => $this->mk_fd_qty,
            'mk_fd_staf_beh' => $this->mk_fd_staf_beh,
            //step6
            'mk_lug_trans_qual' => $this->mk_lug_trans_qual,
            'jd_to_mk_tr_fac' => $this->jd_to_mk_tr_fac,
            'room_to_hrm_trans_qual' => $this->room_to_hrm_trans_qual,
            'mk_to_md_tr_qual' => $this->mk_to_md_tr_qual,
            'mk_busses_avail' => $this->mk_busses_avail,
            'mk_busses_cond' => $this->mk_busses_cond,
            'mk_busses_aircond' => $this->mk_busses_aircond,
            'mk_busses_staff_beh' => $this->mk_busses_staff_beh,
            //step7
            'md_living_qual' => $this->md_living_qual,
            'md_lift_qual' => $this->md_lift_qual,
            'md_wifi_qual' => $this->md_wifi_qual,
            'md_rmclean_qual' => $this->md_rmclean_qual,
            'md_genclean_qual' => $this->md_genclean_qual,
            'md_bathclean_qual' => $this->md_bathclean_qual,
            'md_staff_beh' => $this->md_staff_beh,
            'md_room_mem_qty' => $this->md_room_mem_qty,
            //step8
            'md_fd_place' => $this->md_fd_place,
            'md_fd_quality' => $this->md_fd_quality,
            'md_fd_taste' => $this->md_fd_taste,
            'md_fd_fresh' => $this->md_fd_fresh,
            'md_fd_qty' => $this->md_fd_qty,
            'md_fd_staf_beh' => $this->md_fd_staf_beh,
            //step9
            'mdair_to_living_trans_qual' => $this->mdair_to_living_trans_qual,
            'md_lug_trans_qual' => $this->md_lug_trans_qual,
            'liv_to_hrm_tr_fac' => $this->liv_to_hrm_tr_fac,
            'md_to_mk_tr_fac' => $this->md_to_mk_tr_fac,
            'md_busses_avail' => $this->md_busses_avail,
            'md_busses_cond' => $this->md_busses_cond,
            'md_busses_aircond' => $this->md_busses_aircond,
            'md_busses_staff_beh' => $this->md_busses_staff_beh,
            //step10
            'is_riaz_ul_jan_ind_or_grp' => $this->is_riaz_ul_jan_ind_or_grp,
            'riaz_ul_jan_qual' => $this->riaz_ul_jan_qual,
            'riaz_ul_by_assis_qual' => $this->riaz_ul_by_assis_qual,
            'is_40prayers' => $this->is_40prayers,
            //step11
            'is_mna_to_arfat_train' => $this->is_mna_to_arfat_train,
            'mna_to_arfat_train_qual' => $this->mna_to_arfat_train_qual,
            'is_mna_to_arfat_bus' => $this->is_mna_to_arfat_bus,
            'mna_to_arfat_bus_qual' => $this->mna_to_arfat_bus_qual,
            'is_mktb_to_mshair_ontime' => $this->is_mktb_to_mshair_ontime,
            'mna_all_fac_qual' => $this->mna_all_fac_qual,
            'arfat_all_fac_qual' => $this->arfat_all_fac_qual,
            'mna_arfat_fd_qual' => $this->mna_arfat_fd_qual,
            //step12
            'pk_hos_disp_fac' => $this->pk_hos_disp_fac,
            'doc_para_beh' => $this->doc_para_beh,
            'med_avail' => $this->med_avail,
            'ambul_avail' => $this->ambul_avail,
            //step13
            'phm_cont_serv_fac' => $this->phm_cont_serv_fac,
            'phm_compl_serv_fac' => $this->phm_compl_serv_fac,
            'phm_lug_lost_serv' => $this->phm_lug_lost_serv,
            'phm_hos_disp_fac' => $this->phm_hos_disp_fac,
            'phm_hrm_guid_fac' => $this->phm_hrm_guid_fac,
            'haj_assis_serv' => $this->haj_assis_serv,
            'is_phm_call_fac' => $this->is_phm_call_fac,
            'phm_call_qual' => $this->phm_call_qual,
            'is_phm_gift' => $this->is_phm_gift,
            'phm_overall_fac' => $this->phm_overall_fac,
            'is_again_gov_haj_schem' => $this->is_again_gov_haj_schem,

            //step14
            'arrangments_suggest' => $this->arrangments_suggest,
            'date_form_sbmt' => $this->date_form_sbmt,
            'haji_signature' => $this->haji_signature,

        ]);

        $this->successMessage = 'Hajj Survey Submitted Successfully.';

        $this->clearForm();

        $this->currentStep = 1;
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function back($step)
    {
        $this->currentStep = $step;
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function clearForm()
    {

        $this->name = '';
        $this->passport_no = 0;
        $this->hform_no = 0;
        $this->maktab_no = 0;
        $this->building_no = 0;
        $this->pak_mob_no = 0;
        //step2
        $this->hform_sbmt_qual = 10;
        $this->mra_info_qual = 10;
        $this->is_obt_train = 1;
        $this->obt_train_qual = 10;
        $this->camp_fac_qual = 10;
        $this->is_rec_hcnic = 1;
        $this->is_rec_logtag = 1;
        $this->is_rec_infomat = 1;
        $this->obt_infomat_qual = 10;
        $this->is_rec_ticpasvis = 1;
        //step3
        $this->pairp_fac = 10;
        $this->pair_line = '';
        $this->pairl_qual = 10;
        $this->is_dep_ontime = 1;
        $this->pairl_staf_beh = 10;
        $this->is_isbtomakh = 1;
        //step4
        $this->mk_living_qual = 10;
        $this->mk_lift_qual = 10;
        $this->mk_wifi_qual = 10;
        $this->mk_rmclean_qual = 10;
        $this->mk_genclean_qual = 10;
        $this->mk_bathclean_qual = 10;
        $this->mk_staff_beh = 10;
        $this->mk_room_mem_qty = '';
        //step5
        $this->mk_fd_place = 10;
        $this->mk_fd_quality = 10;
        $this->mk_fd_taste = 10;
        $this->mk_fd_fresh = 10;
        $this->mk_fd_qty = 10;
        $this->mk_fd_staf_beh = 10;
        //step6
        $this->mk_lug_trans_qual = 10;
        $this->jd_to_mk_tr_fac = 10;
        $this->room_to_hrm_trans_qual = 10;
        $this->mk_to_md_tr_qual = 10;
        $this->mk_busses_avail = 10;
        $this->mk_busses_cond = 10;
        $this->mk_busses_aircond = 10;
        $this->mk_busses_staff_beh = 10;
        //step7
        $this->md_living_qual = 10;
        $this->md_lift_qual = 10;
        $this->md_wifi_qual = 10;
        $this->md_rmclean_qual = 10;
        $this->md_genclean_qual = 10;
        $this->md_bathclean_qual = 10;
        $this->md_staff_beh = 10;
        $this->md_room_mem_qty = '';
        //step8
        $this->md_fd_place = 10;
        $this->md_fd_quality = 10;
        $this->md_fd_taste = 10;
        $this->md_fd_fresh = 10;
        $this->md_fd_qty = 10;
        $this->md_fd_staf_beh = 10;
        //step9
        $this->mdair_to_living_trans_qual = 10;
        $this->md_lug_trans_qual = 10;
        $this->liv_to_hrm_tr_fac = 10;
        $this->md_to_mk_tr_fac = 10;
        $this->md_busses_avail = 10;
        $this->md_busses_cond = 10;
        $this->md_busses_aircond = 10;
        $this->md_busses_staff_beh = 10;
        //step10
        $this->is_riaz_ul_jan_ind_or_grp = 'grp';
        $this->riaz_ul_jan_qual = 10;
        $this->riaz_ul_by_assis_qual = 10;
        $this->is_40prayers = 1;
        //step11
        $this->is_mna_to_arfat_train = 1;
        $this->mna_to_arfat_train_qual = 10;
        $this->is_mna_to_arfat_bus = 1;
        $this->mna_to_arfat_bus_qual = 10;
        $this->is_mktb_to_mshair_ontime = 1;
        $this->mna_all_fac_qual = 10;
        $this->arfat_all_fac_qual = 10;
        $this->mna_arfat_fd_qual = 10;
        //step12
        $this->pk_hos_disp_fac = 10;
        $this->doc_para_beh = 10;
        $this->med_avail = 10;
        $this->ambul_avail = 10;
        //step13
        $this->phm_cont_serv_fac = 10;
        $this->phm_compl_serv_fac = 10;
        $this->phm_lug_lost_serv = 10;
        $this->phm_hos_disp_fac = 10;
        $this->phm_hrm_guid_fac = 10;
        $this->haj_assis_serv = 10;
        $this->is_phm_call_fac = 1;
        $this->phm_call_qual = 10;
        $this->is_phm_gift = 1;
        $this->phm_overall_fac = 10;
        $this->is_again_gov_haj_schem = 1;
        //step14
        $this->arrangments_suggest = 10;
        $this->date_form_sbmt = 10;
        $this->haji_signature = 10;
    }
}