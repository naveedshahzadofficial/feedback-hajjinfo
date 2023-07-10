<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->bigInteger('passport_no')->default(10);
            $table->bigInteger('hform_no')->default(10);
            $table->bigInteger('maktab_no')->default(10);
            $table->bigInteger('building_no')->default(10);
            $table->string('pak_mob_no')->nullable();
            //step2
            $table->bigInteger('hform_sbmt_qual')->default(10);
            $table->bigInteger('mra_info_qual')->default(10);
            $table->boolean('is_obt_train');
            $table->bigInteger('obt_train_qual')->default(10);
            $table->bigInteger('camp_fac_qual')->default(10);
            $table->boolean('is_rec_hcnic');
            $table->boolean('is_rec_logtag');
            $table->boolean('is_rec_infomat');
            $table->bigInteger('obt_infomat_qual')->default(10);
            $table->boolean('is_rec_ticpasvis');
            //step3
            $table->tinyInteger('pairp_fac')->default(10);
            $table->string('pair_line');
            $table->tinyInteger('pairl_qual')->default(10);
            $table->boolean('is_dep_ontime');
            $table->tinyInteger('pairl_staf_beh')->default(10);
            $table->boolean('is_isbtomakh');
            //step4
            $table->tinyInteger('mk_living_qual')->default(10);
            $table->tinyInteger('mk_lift_qual')->default(10);
            $table->tinyInteger('mk_wifi_qual')->default(10);
            $table->tinyInteger('mk_rmclean_qual')->default(10);
            $table->tinyInteger('mk_genclean_qual')->default(10);
            $table->tinyInteger('mk_bathclean_qual')->default(10);
            $table->tinyInteger('mk_staff_beh')->default(10);
            $table->string('mk_room_mem_qty');
            //step5
            $table->tinyInteger('mk_fd_place')->default(10);
            $table->tinyInteger('mk_fd_quality')->default(10);
            $table->tinyInteger('mk_fd_taste')->default(10);
            $table->tinyInteger('mk_fd_fresh')->default(10);
            $table->tinyInteger('mk_fd_qty')->default(10);
            $table->tinyInteger('mk_fd_staf_beh')->default(10);
            //step6
            $table->tinyInteger('mk_lug_trans_qual')->default(10);
            $table->tinyInteger('jd_to_mk_tr_fac')->default(10);
            $table->tinyInteger('room_to_hrm_trans_qual')->default(10);
            $table->tinyInteger('mk_to_md_tr_qual')->default(10);
            $table->tinyInteger('mk_busses_avail')->default(10);
            $table->tinyInteger('mk_busses_cond')->default(10);
            $table->tinyInteger('mk_busses_aircond')->default(10);
            $table->tinyInteger('mk_busses_staff_beh')->default(10);
            //step7
            $table->tinyInteger('md_living_qual')->default(10);
            $table->tinyInteger('md_lift_qual')->default(10);
            $table->tinyInteger('md_wifi_qual')->default(10);
            $table->tinyInteger('md_rmclean_qual')->default(10);
            $table->tinyInteger('md_genclean_qual')->default(10);
            $table->tinyInteger('md_bathclean_qual')->default(10);
            $table->tinyInteger('md_staff_beh')->default(10);
            $table->string('md_room_mem_qty');
            //step8
            $table->tinyInteger('md_fd_place')->default(10);
            $table->tinyInteger('md_fd_quality')->default(10);
            $table->tinyInteger('md_fd_taste')->default(10);
            $table->tinyInteger('md_fd_fresh')->default(10);
            $table->tinyInteger('md_fd_qty')->default(10);
            $table->tinyInteger('md_fd_staf_beh')->default(10);
            //step9
            $table->tinyInteger('mdair_to_living_trans_qual')->default(10);
            $table->tinyInteger('md_lug_trans_qual')->default(10);
            $table->tinyInteger('liv_to_hrm_tr_fac')->default(10);
            $table->tinyInteger('md_to_mk_tr_fac')->default(10);
            $table->tinyInteger('md_busses_avail')->default(10);
            $table->tinyInteger('md_busses_cond')->default(10);
            $table->tinyInteger('md_busses_aircond')->default(10);
            $table->tinyInteger('md_busses_staff_beh')->default(10);
            //step10
            $table->string('is_riaz_ul_jan_ind_or_grp');
            $table->tinyInteger('riaz_ul_jan_qual')->default(10);
            $table->tinyInteger('riaz_ul_by_assis_qual')->default(10);
            $table->boolean('is_40prayers');
            //step11
            $table->boolean('is_mna_to_arfat_train');
            $table->tinyInteger('mna_to_arfat_train_qual')->default(10);
            $table->boolean('is_mna_to_arfat_bus');
            $table->tinyInteger('mna_to_arfat_bus_qual')->default(10);
            $table->boolean('is_mktb_to_mshair_ontime');
            $table->tinyInteger('mna_all_fac_qual')->default(10);
            $table->tinyInteger('arfat_all_fac_qual')->default(10);
            $table->tinyInteger('mna_arfat_fd_qual')->default(10);
            //step12
            $table->tinyInteger('pk_hos_disp_fac')->default(10);
            $table->tinyInteger('doc_para_beh')->default(10);
            $table->tinyInteger('med_avail')->default(10);
            $table->tinyInteger('ambul_avail')->default(10);
            //step13
            $table->tinyInteger('phm_cont_serv_fac')->default(10);
            $table->tinyInteger('phm_compl_serv_fac')->default(10);
            $table->tinyInteger('phm_lug_lost_serv')->default(10);
            $table->tinyInteger('phm_hos_disp_fac')->default(10);
            $table->tinyInteger('phm_hrm_guid_fac')->default(10);
            $table->tinyInteger('haj_assis_serv')->default(10);
            $table->boolean('is_phm_call_fac');
            $table->tinyInteger('phm_call_qual')->default(10);
            $table->boolean('is_phm_gift');
            $table->tinyInteger('phm_overall_fac')->default(10);
            $table->boolean('is_again_gov_haj_schem');

            //step14
            $table->longText('arrangments_suggest');
            $table->date('date_form_sbmt');
            $table->string('haji_signature');
            //final
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};