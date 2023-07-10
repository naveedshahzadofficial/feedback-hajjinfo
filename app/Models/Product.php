<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  use HasFactory;
  protected $fillable = [
    // 'name', 'amount', 'description', 'status', 'stock'
    //step1
    'name',
    'passport_no',
    'hform_no',
    'maktab_no',
    'building_no',
    'pak_mob_no',
    //step2
    'hform_sbmt_qual',
    'mra_info_qual',
    'is_obt_train',
    'obt_train_qual',
    'camp_fac_qual',
    'is_rec_hcnic',
    'is_rec_logtag',
    'is_rec_infomat',
    'obt_infomat_qual',
    'is_rec_ticpasvis',
    //step3
    'pairp_fac',
    'pair_line',
    'pairl_qual',
    'is_dep_ontime',
    'pairl_staf_beh',
    'is_isbtomakh',
    //step4
    'mk_living_qual',
    'mk_lift_qual',
    'mk_wifi_qual',
    'mk_rmclean_qual',
    'mk_genclean_qual',
    'mk_bathclean_qual',
    'mk_staff_beh',
    'mk_room_mem_qty',
    //step5
    'mk_fd_place',
    'mk_fd_quality',
    'mk_fd_taste',
    'mk_fd_fresh',
    'mk_fd_qty',
    'mk_fd_staf_beh',
    //step6
    'mk_lug_trans_qual',
    'jd_to_mk_tr_fac',
    'room_to_hrm_trans_qual',
    'mk_to_md_tr_qual',
    'mk_busses_avail',
    'mk_busses_cond',
    'mk_busses_aircond',
    'mk_busses_staff_beh',
    //step7
    'md_living_qual',
    'md_lift_qual',
    'md_wifi_qual',
    'md_rmclean_qual',
    'md_genclean_qual',
    'md_bathclean_qual',
    'md_staff_beh',
    'md_room_mem_qty',
    //step8
    'md_fd_place',
    'md_fd_quality',
    'md_fd_taste',
    'md_fd_fresh',
    'md_fd_qty',
    'md_fd_staf_beh',
    //step9
    'mdair_to_living_trans_qual',
    'md_lug_trans_qual',
    'liv_to_hrm_tr_fac',
    'md_to_mk_tr_fac',
    'md_busses_avail',
    'md_busses_cond',
    'md_busses_aircond',
    'md_busses_staff_beh',
    //step10
    'is_riaz_ul_jan_ind_or_grp',
    'riaz_ul_jan_qual',
    'riaz_ul_by_assis_qual',
    'is_40prayers',
    //step11
    'is_mna_to_arfat_train',
    'mna_to_arfat_train_qual',
    'is_mna_to_arfat_bus',
    'mna_to_arfat_bus_qual',
    'is_mktb_to_mshair_ontime',
    'mna_all_fac_qual',
    'arfat_all_fac_qual',
    'mna_arfat_fd_qual',
    //step12
    'pk_hos_disp_fac',
    'doc_para_beh',
    'med_avail',
    'ambul_avail',
    //step13
    'phm_cont_serv_fac',
    'phm_compl_serv_fac',
    'phm_lug_lost_serv',
    'phm_hos_disp_fac',
    'phm_hrm_guid_fac',
    'haj_assis_serv',
    'is_phm_call_fac',
    'phm_call_qual',
    'is_phm_gift',
    'phm_overall_fac',
    'is_again_gov_haj_schem',

    //step14
    'arrangments_suggest',
    'date_form_sbmt',
    'haji_signature'
  ];
}