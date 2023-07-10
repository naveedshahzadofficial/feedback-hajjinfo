<div class="row">
    <div class="tab-content col" id="tab_content">
        <div class="btn-sec py-3 row">
            <div class="heading-sec col-md col-12 ">
                <h5 class="h5 text-white text-center py-0 pt-1 px-2">وزارت مذہبی امور و بین المذاہب ہم آہنگی
                    کی طرف سے حج 2023 ء کیلئے کیے گئے انتظامات سے متعلق سروے فارم برائے گورنمنٹ حج</h5>
            </div>
            <button type="button" class="btn bar-btn btn-dark rounded mx-4 px-3">
                <i class="bi bi-list"></i>
            </button>
            <button type="button" class="btn close-btn btn-dark rounded mx-4 px-3">
                <i class="bi bi-x"></i>
            </button>
        </div>
        <div class="tab-pane fade show container haji-intro  {{ $currentStep != 1 ? '' : 'active' }}" id="form01"
            role="tabpanel" aria-labelledby="step1">
            <div class="row">
                <div class="col-xs-12 msg-wrap">
                    @if (!empty($successMessage))
                        <div class="alert alert-success">
                            {{ $successMessage }}
                        </div>
                    @endif
                </div>
                <div class="col-12 mt-md-5 mt-4">
                    <div class="was-validated text-right row">
                        <div class="my-2 col-md-5 px-md-2 px-4">
                            <label for="haji_name" class="mx-3 form-label">نام:</label>
                            <input type="text" wire:model="name" class="form-control px-4 py-2" id="haji_name"
                                placeholder=" حاجی کا نام" name="haji_name" required>
                            @error('name')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="my-2 col-md-5 px-md-2 px-4">
                            <label for="passport" class="mx-3 form-label">پاسپورٹ نمبر:</label>
                            <input wire:model="passport_no" type="number" class="form-control px-4 py-2" id="passport"
                                placeholder="پاسپورٹ نمبر" name="passport" required>
                            @error('passport_no')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="my-2 col-md-5 px-md-2 px-4">
                            <label for="hajj_form_no" class="mx-3 form-label">حج فارم نمبر:</label>
                            <input wire:model="hform_no" type="number" class="form-control px-4 py-2" id="hajj_form"
                                placeholder="حج فارم نمبر" name="hajj_form_no" required>
                            @error('hform_no')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="my-2 col-md-5 px-md-2 px-4">
                            <label for="maktab_no" class="mx-3 form-label">مکتب نمبر :</label>
                            <input wire:model="maktab_no" type="number" class="form-control px-4 py-2" id="maktab_no"
                                palceholder="مکتب نمبر " name="maktab_no" required>
                            @error('maktab_no')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="my-2 col-md-5 px-md-2 px-4">
                            <label for="building_no" class="mx-3 form-label">بلڈنگ نمبر:</label>
                            <input wire:model="building_no" type="number" class="form-control px-4 py-2"
                                id="building_no" placeholder="بلڈنگ  نمبر" name="building_no" required>
                            @error('building_no')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="my-2 col-md-5 px-md-2 px-4">
                            <label for="phonenumber" class="form-label">پاکستانی موبائل نمبر</label>
                            <input wire:model="pak_mob_no" type="text" class="form-control px-4 py-2"
                                id="phonenumber" placeholder="پاکستانی موبائل نمبر" name="phonenumber" required>
                            @error('pak_mob_no')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="invalid-feedback text-center">براہ کرم تمام خانے پر کریں۔</div>
                        <div class="col-12 my-5 text-left">
                            <button type="button" wire:click="firstStepSubmit"
                                class="btn btn-primary next-btn mx-4 my-2 px-4">آگے
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--step1 end-->
        <div class="tab-pane fade show container pak-provived  {{ $currentStep != 2 ? '' : 'active' }}" id="form02"
            role="tabpanel" aria-labelledby="step2">
            <div class="row">
                <div class="text-center feedback-sec col-12 py-1 text-center">
                    <h5 class="h5">نیچے دئے گئے سوالات میں سہولیات کے معیار کے بارے میں اپنی رائے دینے کے
                        لئے دس تا صفر تک کوئی بھی نمبر دیں۔ </h5>
                    <div class="btn-list" role="group">
                        <button type="button" class="btn btn-primary rounded mx-1 my-1 small">بہترین :
                            10</button>
                        <button type="button" class="btn btn-primary rounded mx-1 my-1 small">اچھا :
                            8</button>
                        <button type="button" class="btn btn-primary rounded mx-1 my-1 small">مناسب :
                            6</button>
                        <button type="button" class="btn btn-primary rounded mx-1 my-1 small">غیر مناسب :
                            4</button>
                        <button type="button" class="btn btn-primary rounded mx-1 my-1 small">خراب
                            :2</button>
                        <button type="button" class="btn btn-primary rounded mx-1 my-1 small">انتہائی خراب :
                            0</button>
                    </div>
                </div>
                <div class="col-md-8 col-10 offset-md-2 offset-1 mt-2">
                    <div class="was-validated text-right row">
                        <div class="feedback-options col-5 text-center px-2">
                            <div class="dropdown my-2">
                                <select wire:model="hform_sbmt_qual" class="btn btn-primary dropdown py-1"
                                    type="button" area-controlledby="hajj-reg-process" id="select1"
                                    data-bs-toggle="dropdown" aria-expanded="false" required>
                                    <ul class="list-unstyled dropdown-menu" aria-labelledby="hajj-reg-process">
                                        <li>
                                            <option class="dropdown-item">10</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">8</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">6</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">4</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">2</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">0</option>
                                        </li>
                                    </ul>
                                </select>
                                @error('hform_sbmt_qual')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="dropdown my-md-2 my-3">
                                <select wire:model="mra_info_qual" class="btn btn-primary dropdown py-1"
                                    type="button" area-controlledby="hajj-reg-process" id="select1"
                                    data-bs-toggle="dropdown" aria-expanded="false" required>
                                    <ul class="list-unstyled dropdown-menu" aria-labelledby="hajj-reg-process">
                                        <li>
                                            <option class="dropdown-item">10</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">08</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">06</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">04</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">02</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">00</option>
                                        </li>
                                    </ul>
                                </select>
                                @error('mra_info_qual')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mt-2 mb-1">
                                <input wire:model="is_obt_train" name="is_obt_train" id="is_obt_train_yes"
                                    type="radio" value="1"><label for="is_obt_train_yes"
                                    class="form-label mx-1 small">ہاں</label>
                                <input wire:model="is_obt_train" name="is_obt_train" id="is_obt_train_no"
                                    type="radio" value="0"><label for="is_obt_train_no"
                                    class="form-label mx-1 small">نہیں</label>
                                @error('is_obt_train')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="dropdown my-2">
                                <select wire:model="obt_train_qual" class="btn btn-primary dropdown py-1"
                                    type="button" area-controlledby="hajj-reg-process" id="select1"
                                    data-bs-toggle="dropdown" aria-expanded="false" required>
                                    <ul class="list-unstyled dropdown-menu" aria-labelledby="hajj-reg-process">
                                        <li>
                                            <option class="dropdown-item">10</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">08</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">06</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">04</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">02</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">00</option>
                                        </li>
                                    </ul>
                                </select>
                                @error('obt_train_qual')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="dropdown my-1">
                                <select wire:model="camp_fac_qual" class="btn btn-primary dropdown py-1"
                                    type="button" area-controlledby="hajj-reg-process" id="select1"
                                    data-bs-toggle="dropdown" aria-expanded="false" required>
                                    <ul class="list-unstyled dropdown-menu" aria-labelledby="hajj-reg-process">
                                        <li>
                                            <option class="dropdown-item">10</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">08</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">06</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">04</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">02</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">00</option>
                                        </li>
                                    </ul>
                                </select>
                                @error('camp_fac_qual')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="my-md-2 my-4">
                                <input wire:model="is_rec_hcnic" type="radio" name="is_rec_hcnic"
                                    value="1"><label for="hajj_trainig"
                                    class="form-label mx-1 small">ہاں</label>
                                <input wire:model="is_rec_hcnic" type="radio" name="is_rec_hcnic"
                                    value="0"><label for="hajj_trainig"
                                    class="form-label mx-1 small">نہیں</label>
                                @error('is_rec_hcnic')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="my-md-2 my-4">
                                <input wire:model="is_rec_logtag" type="radio" name="is_rec_logtag"
                                    value="1"><label for="hajj_trainig" class="form-label mx-1 small"> ہاں
                                </label>
                                <input wire:model="is_rec_logtag" type="radio" name="is_rec_logtag"
                                    value="0"><label for="hajj_trainig" class="form-label mx-1 small"> نہیں
                                </label>
                                @error('is_rec_hcnic')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="my-2">
                                <input wire:model="is_rec_infomat" type="radio" name="is_rec_infomat"
                                    value="1"><label for="hajj_trainig"
                                    class="form-label mx-1 small">ہاں</label>
                                <input wire:model="is_rec_infomat" type="radio" name="is_rec_infomat"
                                    value="0"><label for="hajj_trainig"
                                    class="form-label mx-1 small">نہیں</label>
                                @error('is_rec_infomat')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="dropdown my-2">
                                <select wire:model="obt_infomat_qual" class="btn btn-primary dropdown py-1"
                                    type="button" area-controlledby="hajj-reg-process" id="select1"
                                    data-bs-toggle="dropdown" aria-expanded="false" required>
                                    <ul class="list-unstyled dropdown-menu" aria-labelledby="hajj-reg-process">
                                        <li>
                                            <option class="dropdown-item">10</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">08</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">06</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">04</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">02</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">00</option>
                                        </li>
                                    </ul>
                                </select>
                                @error('obt_infomat_qual')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="my-md-2 my-4">
                                <input wire:model="is_rec_ticpasvis" type="radio" name="is_rec_ticpasvis"
                                    value="1"><label for="hajj_trainig"
                                    class="form-label mx-1 small">ہاں</label>
                                <input wire:model="is_rec_ticpasvis" type="radio" name="is_rec_ticpasvis"
                                    value="0"><label for="hajj_trainig"
                                    class="form-label mx-1 small">نہیں</label>
                                @error('is_rec_ticpasvis')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>
                        <div class="labels_div col-7 px-3">
                            <label class="form-label my-2">حج فارم جمع کروانے کے عمل کا معیار</label><br>
                            <label class="form-label my-2">وزارت مذہبی امور کی جانب سے مختلف مراحل پر اطلاع
                                دیئے جانے کا معیار</label><br>
                            <label class="form-label my-2">کیا سعودی عرب روانگی سے قبل حج کی تربیت حاصل
                                کی؟</label><br>
                            <label class="form-label my-2">اگر ہاں تو اس کی افادیت ؟</label><br>
                            <label class="form-label my-2">حاجی کیمپ میں سہولیات کا معیار</label><br>
                            <label class="form-label my-2">کیا روانگی سے قبل آپ کو حاجی کیمپ سے حج شناختی
                                کارڈ ملا؟</label><br>
                            <label class="form-label my-2">کیا حاجی کیمپ یا ائیر پورٹ پر آپ کو سامان پر
                                چسپاں کرنے کیلئے شناختی اسٹیکر مہیا کیا گیا؟</label><br>
                            <label class="form-label my-2">کیا وزارت کی طرف سے معلوماتی مواد ملا ؟
                            </label><br>
                            <label class="form-label my-2">اگر ہاں تو اس کی افادیت</label><br>
                            <label class="form-label my-2">کیا آپ کو ٹکٹ ، پاسپورٹ اور ویزہ فلائٹ سے دو روز
                                قبل ،حاجی کیمپ سے ملا؟</label><br>

                        </div>
                        <div class=" col-xs-12 my-5 text-center nxt-prev-container">
                            <button type="button" wire:click="secondStepSubmit"
                                class="btn btn-primary next-btn mx-4 my-2 px-4"><i
                                    class="bi bi-arrow-left-short"></i>آگے </button>
                            <button type="button" wire:click="back(1)"
                                class="btn btn-dark previous-btn mx-4 my-2 px-3">پیچھے <i
                                    class="bi bi-arrow-right-short"></i> </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!---step2 end here-->
        <div class="tab-pane fade show container makkah-airline  {{ $currentStep != 3 ? '' : 'active' }}"
            id="form03" role="tabpanel" aria-labelledby="step3">
            <div class="row">
                <div class="text-center feedback-sec col-12 py-1 text-center">
                    <h5 class="h5">نیچے دئے گئے سوالات میں سہولیات کے معیار کے بارے میں اپنی رائے دینے کے
                        لئے دس تا صفر تک کوئی بھی نمبر دیں۔ </h5>
                    <div class="btn-list" role="group">
                        <button type="button" class="btn btn-primary rounded mx-1 my-1 small">بہترین :
                            10</button>
                        <button type="button" class="btn btn-primary rounded mx-1 my-1 small">اچھا :
                            8</button>
                        <button type="button" class="btn btn-primary rounded mx-1 my-1 small">مناسب :
                            6</button>
                        <button type="button" class="btn btn-primary rounded mx-1 my-1 small">غیر مناسب :
                            4</button>
                        <button type="button" class="btn btn-primary rounded mx-1 my-1 small">خراب
                            :2</button>
                        <button type="button" class="btn btn-primary rounded mx-1 my-1 small">انتہائی خراب :
                            0</button>
                    </div>
                </div>
                <div class="col-md-8 col-11 offset-md-2 offset-1 pt-5">
                    <div class="was-validated text-right row">
                        <div class="feedback-options col-6 text-left px-2">
                            <div class="dropdown my-md-1 my-3">
                                <select wire:model="pairp_fac" class="btn btn-primary dropdown py-1" type="button"
                                    area-controlledby="" data-bs-toggle="dropdown" aria-expanded="false" required>
                                    <ul class="list-unstyled dropdown-menu" aria-labelledby="hajj-reg-process">
                                        <li>
                                            <option class="dropdown-item">10</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">08</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">06</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">04</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">02</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">00</option>
                                        </li>
                                    </ul>
                                </select>
                                @error('pairp_fac')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="row px-0 my-1 px-md-2 mx-md-1">
                                <div class="dropdown row">
                                    <select wire:model="pairl_qual" class="btn btn-primary dropdown" type="button"
                                        area-controlledby="hajj-reg-process" id="select1" data-bs-toggle="dropdown"
                                        aria-expanded="false" required>
                                        <ul class="list-unstyled dropdown-menu" aria-labelledby="hajj-reg-process">
                                            <li>
                                                <option class="dropdown-item">10</option>
                                            </li>
                                            <li>
                                                <option class="dropdown-item">08</option>
                                            </li>
                                            <li>
                                                <option class="dropdown-item">06</option>
                                            </li>
                                            <li>
                                                <option class="dropdown-item">04</option>
                                            </li>
                                            <li>
                                                <option class="dropdown-item">02</option>
                                            </li>
                                            <li>
                                                <option class="dropdown-item">00</option>
                                            </li>
                                        </ul>
                                    </select>
                                    @error('pairl_qual')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                    <div class="my-1 mx-2">
                                        <input wire:model="pair_line" value="pia" type="radio"
                                            name="pia"><label for="airline_name" class="form-label mx-1 small">پی
                                            ائی اے</label>
                                        <input wire:model="pair_line" value="saudi" type="radio"
                                            name="saudi"><label for="airline_name"
                                            class="form-label mx-1 small">سعودی</label>
                                        <input wire:model="pair_line" value="serene" type="radio"
                                            name="serene"><label for="airline_name"
                                            class="form-label mx-1 small">سیرین</label>
                                        <input wire:model="pair_line" type="radio" value="airblue"
                                            name="airblue"><label for="airline_name"
                                            class="form-label mx-1 small">ائیر بلیو</label>
                                        @error('pair_line')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="my-1">
                                <input wire:model="is_dep_ontime" value="1" type="radio"
                                    name="is_dep_ontime"><label for="hajj_trainig"
                                    class="form-label mx-1 small">ہاں</label>
                                <input wire:model="is_dep_ontime" value="0" type="radio"
                                    name="is_dep_ontime"><label for="hajj_trainig"
                                    class="form-label mx-1 small">نہیں</label>
                                @error('is_dep_ontime')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="dropdown my-2">
                                <select wire:model="pairl_staf_beh" class="btn btn-primary dropdown py-1"
                                    type="button" area-controlledby="hajj-reg-process" id="select1"
                                    data-bs-toggle="dropdown" aria-expanded="false" required>
                                    <ul class="list-unstyled dropdown-menu" aria-labelledby="hajj-reg-process">
                                        <li>
                                            <option class="dropdown-item">10</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">08</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">06</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">04</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">02</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">00</option>
                                        </li>
                                    </ul>
                                </select>
                                @error('pairl_staf_beh')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="my-1">
                                <input wire:model="is_isbtomakh" value="1" type="radio"
                                    name="is_isbtomakh"><label for="hajj_trainig"
                                    class="form-label mx-1 small">ہاں</label>
                                <input wire:model="is_isbtomakh" value="0" type="radio"
                                    name="is_isbtomakh"><label for="hajj_trainig"
                                    class="form-label mx-1 small">نہیں</label>
                                @error('is_isbtomakh')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="labels_div col-6 px-3">
                            <label class="form-label my-2">پاکستانی ائیرپو رٹ پر سہولیات کا
                                معیار</label><br>
                            <label class="form-label my-2">ائیر لائن کا نام اور معیار</label><br>
                            <label class="form-label my-2">کیا پروازبروقت روانہ ہوئی؟</label><br>
                            <label class="form-label my-2">ائیر لائن کے عملے کا برتاؤ</label><br>
                            <label class="form-label my-2">کیا آپ اسلام آباد سے روڈ ٹو مکہ سکیم کے تحت سعودی
                                عرب پہنچے؟</label><br>
                        </div>
                        <div class=" col-xs-12 my-5 text-center nxt-prev-container">
                            <button type="button" wire:click="thirdStepSubmit"
                                class="btn btn-primary next-btn my-2 px-4">
                                <i class="bi bi-arrow-left-short"></i>آگے </button>
                            <button type="button" wire:click="back(2)"
                                class="btn btn-dark previous-btn mx-4 my-2 px-3">پیچھے <i
                                    class="bi bi-arrow-right-short"></i> </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--step3 end here -->
        <div class="tab-pane fade show container makkah-room  {{ $currentStep != 4 ? '' : 'active' }}" id="form04"
            role="tabpanel" aria-labelledby="step4">
            <div class="row">
                <div class="text-center feedback-sec col-12 py-1 text-center">
                    <h5 class="h5">نیچے دئے گئے سوالات میں سہولیات کے معیار کے بارے میں اپنی رائے دینے کے
                        لئے دس تا صفر تک کوئی بھی نمبر دیں۔ </h5>
                    <div class="btn-list" role="group">
                        <button type="button" class="btn btn-primary rounded mx-1 my-1 small">بہترین :
                            10</button>
                        <button type="button" class="btn btn-primary rounded mx-1 my-1 small">اچھا :
                            8</button>
                        <button type="button" class="btn btn-primary rounded mx-1 my-1 small">مناسب :
                            6</button>
                        <button type="button" class="btn btn-primary rounded mx-1 my-1 small">غیر مناسب :
                            4</button>
                        <button type="button" class="btn btn-primary rounded mx-1 my-1 small">خراب
                            :2</button>
                        <button type="button" class="btn btn-primary rounded mx-1 my-1 small">انتہائی خراب :
                            0</button>
                    </div>
                </div>
                <div class="col-md-8 col-10 offset-md-2 offset-1 pt-5">
                    <div class="was-validated text-right row">
                        <div class="feedback-options col-md-3 col-5 offset-md-2 text-left px-2">
                            <div class="dropdown my-1">
                                <select wire:model="mk_living_qual" class="btn btn-primary dropdown py-1"
                                    type="button" area-controlledby="" data-bs-toggle="dropdown"
                                    aria-expanded="false" required>
                                    <ul class="list-unstyled dropdown-menu" aria-labelledby="hajj-reg-process">
                                        <li>
                                            <option class="dropdown-item">10</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">8</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">6</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">4</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">2</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">0</option>
                                        </li>
                                    </ul>
                                </select>
                                @error('mk_living_qual')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="dropdown my-1">
                                <select wire:model="mk_lift_qual" class="btn btn-primary dropdown py-1"
                                    type="button" area-controlledby="" data-bs-toggle="dropdown"
                                    aria-expanded="false" required>
                                    <ul class="list-unstyled dropdown-menu" aria-labelledby="hajj-reg-process">
                                        <li>
                                            <option class="dropdown-item">10</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">8</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">6</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">4</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">2</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">0</option>
                                        </li>
                                    </ul>
                                </select>
                                @error('mk_lift_qual')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="dropdown my-1">
                                <select wire:model="mk_wifi_qual" class="btn btn-primary dropdown py-1"
                                    type="button" area-controlledby="" data-bs-toggle="dropdown"
                                    aria-expanded="false" required>
                                    <ul class="list-unstyled dropdown-menu" aria-labelledby="hajj-reg-process">
                                        <li>
                                            <option class="dropdown-item">10</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">8</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">6</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">4</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">2</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">0</option>
                                        </li>
                                    </ul>
                                </select>
                                @error('mk_wifi_qual')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="dropdown my-1">
                                <select wire:model="mk_rmclean_qual" class="btn btn-primary dropdown py-1"
                                    type="button" area-controlledby="" data-bs-toggle="dropdown"
                                    aria-expanded="false" required>
                                    <ul class="list-unstyled dropdown-menu" aria-labelledby="hajj-reg-process">
                                        <li>
                                            <option class="dropdown-item">10</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">8</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">6</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">4</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">2</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">0</option>
                                        </li>
                                    </ul>
                                </select>
                                @error('mk_rmclean_qual')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="dropdown my-1">
                                <select wire:model="mk_genclean_qual" class="btn btn-primary dropdown" type="button"
                                    area-controlledby="hajj-reg-process" id="select1" data-bs-toggle="dropdown"
                                    aria-expanded="false" required>
                                    <ul class="list-unstyled dropdown-menu" aria-labelledby="hajj-reg-process">
                                        <li>
                                            <option class="dropdown-item">10</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">8</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">6</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">4</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">2</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">0</option>
                                        </li>
                                    </ul>
                                </select>
                                @error('mk_genclean_qual')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="dropdown my-1">
                                <select wire:model="mk_bathclean_qual" class="btn btn-primary dropdown"
                                    type="button" area-controlledby="hajj-reg-process" id="select1"
                                    data-bs-toggle="dropdown" aria-expanded="false" required>
                                    <ul class="list-unstyled dropdown-menu" aria-labelledby="hajj-reg-process">
                                        <li>
                                            <option class="dropdown-item">10</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">8</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">6</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">4</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">2</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">0</option>
                                        </li>
                                    </ul>
                                </select>
                                @error('mk_bathclean_qual')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="dropdown my-1">
                                <select wire:model="mk_staff_beh" class="btn btn-primary dropdown py-1"
                                    type="button" area-controlledby="hajj-reg-process" id="select1"
                                    data-bs-toggle="dropdown" aria-expanded="false" required>
                                    <ul class="list-unstyled dropdown-menu" aria-labelledby="hajj-reg-process">
                                        <li>
                                            <option class="dropdown-item">10</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">8</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">6</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">4</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">2</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">0</option>
                                        </li>
                                    </ul>
                                </select>
                                @error('mk_staff_beh')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="my-3">
                                <input wire:model="mk_room_mem_qty" value="2-3" type="radio"
                                    name="mk_room_mem_qty"><label for="hajj_trainig"
                                    class="form-label small">2-3</label>
                                <input wire:model="mk_room_mem_qty" value="4-5" type="radio"
                                    name="mk_room_mem_qty"><label for="hajj_trainig"
                                    class="form-label small">4-5</label>
                                <input wire:model="mk_room_mem_qty" value="6-7" type="radio"
                                    name="mk_room_mem_qty"><label for="hajj_trainig"
                                    class="form-label small">6-7</label>
                                <input wire:model="mk_room_mem_qty" value="more than 7" type="radio"
                                    name="mk_room_mem_qty"><label for="hajj_trainig" class="form-label small">7سے
                                    زائد</label>
                                @error('mk_room_mem_qty')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="labels_div col-md-5 col-7 px-3">
                            <label class="form-label my-2">مکہ مکرمہ میں رہائش/ عمارت کا معیار</label><br>
                            <label class="form-label my-2">لفٹ</label><br>
                            <label class="form-label my-2">وائی فائی/انٹرنیٹ</label><br>
                            <label class="form-label my-2">کمرے کی صفائی</label><br>
                            <label class="form-label my-2">عام صفائی</label><br>
                            <label class="form-label my-2">باتھ روم صفائی</label><br>
                            <label class="form-label my-2"> عملے کارویہ/برتاؤ</label><br>
                            <label class="form-label my-2">مکہ مکرمہ: کمروں میں حجاج کرام کی
                                تعداد</label><br>

                        </div>
                        <div class=" col-xs-12 my-5 text-center nxt-prev-container">
                            <button type="button" wire:click="fourthStepSubmit"
                                class="btn btn-primary next-btn my-2 px-4">
                                <i class="bi bi-arrow-left-short"></i>آگے </button>
                            <button type="button" wire:click="back(3)"
                                class="btn btn-dark previous-btn mx-4 my-2 px-3">پیچھے <i
                                    class="bi bi-arrow-right-short"></i> </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--step4 end here-->
        <div class="tab-pane fade show container makkah-meal  {{ $currentStep != 5 ? '' : 'active' }}" id="form05"
            role="tabpanel" aria-labelledby="step5">
            <div class="row">
                <div class="text-center feedback-sec col-12 py-1 text-center">
                    <h5 class="h5">نیچے دئے گئے سوالات میں سہولیات کے معیار کے بارے میں اپنی رائے دینے کے
                        لئے دس تا صفر تک کوئی بھی نمبر دیں۔ </h5>
                    <div class="btn-list" role="group">
                        <button type="button" class="btn btn-primary rounded mx-1 my-1 small">بہترین :
                            10</button>
                        <button type="button" class="btn btn-primary rounded mx-1 my-1 small">اچھا :
                            8</button>
                        <button type="button" class="btn btn-primary rounded mx-1 my-1 small">مناسب :
                            6</button>
                        <button type="button" class="btn btn-primary rounded mx-1 my-1 small">غیر مناسب :
                            4</button>
                        <button type="button" class="btn btn-primary rounded mx-1 my-1 small">خراب
                            :2</button>
                        <button type="button" class="btn btn-primary rounded mx-1 my-1 small">انتہائی خراب :
                            0</button>
                    </div>
                </div>
                <div class="col-md-8 col-10 offset-md-2 offset-1 pt-5">
                    <div class="was-validated text-right row">
                        <div class="feedback-options col-md-3 col-5 offset-md-2 text-left px-2">
                            <div class="dropdown my-lg-1 my-3">
                                <select wire:model="mk_fd_place" class="btn btn-primary dropdown py-1" type="button"
                                    area-controlledby="" data-bs-toggle="dropdown" aria-expanded="false" required>
                                    <ul class="list-unstyled dropdown-menu" aria-labelledby="hajj-reg-process">
                                        <li>
                                            <option class="dropdown-item">10</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">8</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">6</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">4</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">2</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">0</option>
                                        </li>
                                    </ul>
                                    @error('mk_fd_place')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </select>
                            </div>
                            <div class="dropdown my-1">
                                <select wire:model="mk_fd_quality" class="btn btn-primary dropdown" type="button"
                                    area-controlledby="hajj-reg-process" id="select1" data-bs-toggle="dropdown"
                                    aria-expanded="false" required>
                                    <ul class="list-unstyled dropdown-menu" aria-labelledby="hajj-reg-process">
                                        <li>
                                            <option class="dropdown-item">10</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">8</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">6</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">4</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">2</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">0</option>
                                        </li>
                                    </ul>
                                </select>
                                @error('mk_fd_quality')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="dropdown my-1">
                                <select wire:model="mk_fd_taste" class="btn btn-primary dropdown py-1" type="button"
                                    area-controlledby="hajj-reg-process" id="select1" data-bs-toggle="dropdown"
                                    aria-expanded="false" required>
                                    <ul class="list-unstyled dropdown-menu" aria-labelledby="hajj-reg-process">
                                        <li>
                                            <option class="dropdown-item">10</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">8</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">6</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">4</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">2</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">0</option>
                                        </li>
                                    </ul>
                                </select>
                                @error('mk_fd_taste')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="dropdown my-1">
                                <select wire:model="mk_fd_fresh" class="btn btn-primary dropdown py-1" type="button"
                                    area-controlledby="hajj-reg-process" id="select1" data-bs-toggle="dropdown"
                                    aria-expanded="false" required>
                                    <ul class="list-unstyled dropdown-menu" aria-labelledby="hajj-reg-process">
                                        <li>
                                            <option class="dropdown-item">10</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">8</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">6</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">4</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">2</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">0</option>
                                        </li>
                                    </ul>
                                </select>
                                @error('mk_fd_fresh')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="dropdown my-1">
                                <select wire:model="mk_fd_qty" class="btn btn-primary dropdown py-1" type="button"
                                    area-controlledby="hajj-reg-process" id="select1" data-bs-toggle="dropdown"
                                    aria-expanded="false" required>
                                    <ul class="list-unstyled dropdown-menu" aria-labelledby="hajj-reg-process">
                                        <li>
                                            <option class="dropdown-item">10</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">8</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">6</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">4</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">2</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">0</option>
                                        </li>
                                    </ul>
                                </select>
                                @error('mk_fd_qty')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="dropdown my-1">
                                <select wire:model="mk_fd_staf_beh" class="btn btn-primary dropdown py-1"
                                    type="button" area-controlledby="hajj-reg-process" id="select1"
                                    data-bs-toggle="dropdown" aria-expanded="false" required>
                                    <ul class="list-unstyled dropdown-menu" aria-labelledby="hajj-reg-process">
                                        <li>
                                            <option class="dropdown-item">10</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">8</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">6</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">4</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">2</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">0</option>
                                        </li>
                                    </ul>
                                </select>
                                @error('mk_fd_staf_beh')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="labels_div col-lg-5 col-7 px-3">
                            <label class="form-label my-2">مکہ مکرمہ میں حاجیوں کی تعداد کے تناسب سے کھانے
                                کی جگہ کی گنجائش </label><br>
                            <label class="form-label my-2">کھانے کا معیار •</label><br>
                            <label class="form-label my-2"> کھانے کا ذائقہ •</label><br>
                            <label class="form-label my-2">کھانے کی تازگی •</label><br>
                            <label class="form-label my-2">کھانے کی مقدار •</label><br>
                            <label class="form-label my-2">عملے کابرتاؤ •</label><br>

                        </div>
                        <div class=" col-xs-12 my-5 text-center nxt-prev-container">
                            <button type="button" wire:click="fifthStepSubmit"
                                class="btn btn-primary next-btn my-2 px-4">
                                <i class="bi bi-arrow-left-short"></i>آگے </button>
                            <button type="button" wire:click="back(4)"
                                class="btn btn-dark previous-btn mx-4 my-2 px-3">پیچھے <i
                                    class="bi bi-arrow-right-short"></i> </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--step5 end here-->
        <div class="tab-pane fade show container makkah-transport  {{ $currentStep != 6 ? '' : 'active' }}"
            id="form06" role="tabpanel" aria-labelledby="step6">
            <div class="row">
                <div class="text-center feedback-sec col-12 py-1 text-center">
                    <h5 class="h5">نیچے دئے گئے سوالات میں سہولیات کے معیار کے بارے میں اپنی رائے دینے کے
                        لئے دس تا صفر تک کوئی بھی نمبر دیں۔ </h5>
                    <div class="btn-list" role="group">
                        <button type="button" class="btn btn-primary rounded mx-1 my-1 small">بہترین :
                            10</button>
                        <button type="button" class="btn btn-primary rounded mx-1 my-1 small">اچھا :
                            8</button>
                        <button type="button" class="btn btn-primary rounded mx-1 my-1 small">مناسب :
                            6</button>
                        <button type="button" class="btn btn-primary rounded mx-1 my-1 small">غیر مناسب :
                            4</button>
                        <button type="button" class="btn btn-primary rounded mx-1 my-1 small">خراب
                            :2</button>
                        <button type="button" class="btn btn-primary rounded mx-1 my-1 small">انتہائی خراب :
                            0</button>
                    </div>
                </div>
                <div class="col-md-8 col-10 offset-md-2 offset-1 pt-5">
                    <div class="was-validated text-right row">
                        <div class="feedback-options col-md-3 col-5 offset-md-2 text-left px-2">
                            <div class="dropdown my-lg-1 my-3">
                                <select wire:model="mk_lug_trans_qual" class="btn btn-primary dropdown py-1"
                                    type="button" area-controlledby="" data-bs-toggle="dropdown"
                                    aria-expanded="false" required>
                                    <ul class="list-unstyled dropdown-menu" aria-labelledby="hajj-reg-process">
                                        <li>
                                            <option class="dropdown-item">10</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">8</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">6</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">4</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">2</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">0</option>
                                        </li>
                                    </ul>
                                </select>
                                @error('mk_lug_trans_qual')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="dropdown my-1">
                                <select wire:model="jd_to_mk_tr_fac" class="btn btn-primary dropdown py-1"
                                    type="button" area-controlledby="" data-bs-toggle="dropdown"
                                    aria-expanded="false" required>
                                    <ul class="list-unstyled dropdown-menu" aria-labelledby="hajj-reg-process">
                                        <li>
                                            <option class="dropdown-item">10</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">8</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">6</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">4</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">2</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">0</option>
                                        </li>
                                    </ul>
                                </select>
                                @error('jd_to_mk_tr_fac')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="dropdown my-sm-1 my-3">
                                <select wire:model="room_to_hrm_trans_qual" class="btn btn-primary dropdown"
                                    type="button" area-controlledby="hajj-reg-process" id="select1"
                                    data-bs-toggle="dropdown" aria-expanded="false" required>
                                    <ul class="list-unstyled dropdown-menu" aria-labelledby="hajj-reg-process">
                                        <li>
                                            <option class="dropdown-item">10</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">8</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">6</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">4</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">2</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">0</option>
                                        </li>
                                    </ul>
                                </select>
                                @error('room_to_hrm_trans_qual')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="dropdown my-1">
                                <select wire:model="mk_to_md_tr_qual" class="btn btn-primary dropdown" type="button"
                                    area-controlledby="hajj-reg-process" id="select1" data-bs-toggle="dropdown"
                                    aria-expanded="false" required>
                                    <ul class="list-unstyled dropdown-menu" aria-labelledby="hajj-reg-process">
                                        <li>
                                            <option class="dropdown-item">10</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">8</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">6</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">4</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">2</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">0</option>
                                        </li>
                                    </ul>
                                </select>
                                @error('mk_to_md_tr_qual')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="dropdown my-1">
                                <select wire:model="mk_busses_avail" class="btn btn-primary dropdown py-1"
                                    type="button" area-controlledby="hajj-reg-process" id="select1"
                                    data-bs-toggle="dropdown" aria-expanded="false" required>
                                    <ul class="list-unstyled dropdown-menu" aria-labelledby="hajj-reg-process">
                                        <li>
                                            <option class="dropdown-item">10</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">8</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">6</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">4</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">2</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">0</option>
                                        </li>
                                    </ul>
                                </select>
                                @error('mk_busses_avail')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="dropdown my-1">
                                <select wire:model="mk_busses_cond" class="btn btn-primary dropdown py-1"
                                    type="button" area-controlledby="hajj-reg-process" id="select1"
                                    data-bs-toggle="dropdown" aria-expanded="false" required>
                                    <ul class="list-unstyled dropdown-menu" aria-labelledby="hajj-reg-process">
                                        <li>
                                            <option class="dropdown-item">10</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">8</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">6</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">4</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">2</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">0</option>
                                        </li>
                                    </ul>
                                </select>
                                @error('mk_busses_cond')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="dropdown my-1">
                                <select wire:model="mk_busses_aircond" class="btn btn-primary dropdown py-1"
                                    type="button" area-controlledby="hajj-reg-process" id="select1"
                                    data-bs-toggle="dropdown" aria-expanded="false" required>
                                    <ul class="list-unstyled dropdown-menu" aria-labelledby="hajj-reg-process">
                                        <li>
                                            <option class="dropdown-item">10</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">8</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">6</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">4</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">2</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">0</option>
                                        </li>
                                    </ul>
                                </select>
                                @error('mk_busses_aircond')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="dropdown my-1">
                                <select wire:model="mk_busses_staff_beh" class="btn btn-primary dropdown py-1"
                                    type="button" area-controlledby="hajj-reg-process" id="select1"
                                    data-bs-toggle="dropdown" aria-expanded="false" required>
                                    <ul class="list-unstyled dropdown-menu" aria-labelledby="hajj-reg-process">
                                        <li>
                                            <option class="dropdown-item">10</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">8</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">6</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">4</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">2</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">0</option>
                                        </li>
                                    </ul>
                                </select>
                                @error('mk_busses_staff_beh')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="labels_div col-lg-5 col-7 px-3">
                            <label class="form-label my-2">ائیر پورٹ سے بلڈنگ تک سامان کی ترسیل کا
                                معیار/بندوبست</label><br>
                            <label class="form-label my-2">جدہ سے مکہ سفری سہولیا ت کا معیار </label><br>
                            <label class="form-label my-2">رہائش سے حرم لے جانے والی سفری سہولیات کا
                                معیار</label><br>
                            <label class="form-label my-2">مکہ سے مدینہ سفری سہولیا ت کا معیار</label><br>
                            <label class="form-label my-2">بسوں کی دستیابی</label><br>
                            <label class="form-label my-2">بسوں کی حالت</label><br>
                            <label class="form-label my-2">بسوں میں ائیر کنڈیشن</label><br>
                            <label class="form-label my-2">بس کے عملے کا برتاؤ</label><br>
                        </div>
                        <div class=" col-xs-12 my-5 text-center nxt-prev-container">
                            <button type="button" wire:click="sixthStepSubmit"
                                class="btn btn-primary next-btn my-2 px-4">
                                <i class="bi bi-arrow-left-short"></i>آگے </button>
                            <button type="button" wire:click="back(5)"
                                class="btn btn-dark previous-btn mx-4 my-2 px-3">پیچھے <i
                                    class="bi bi-arrow-right-short"></i> </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--step6 end here-->
        <div class="tab-pane fade show container madina-room  {{ $currentStep != 7 ? '' : 'active' }}" id="form07"
            role="tabpanel" aria-labelledby="step7">
            <div class="row">
                <div class="text-center feedback-sec col-12 py-1 text-center">
                    <h5 class="h5">نیچے دئے گئے سوالات میں سہولیات کے معیار کے بارے میں اپنی رائے دینے کے
                        لئے دس تا صفر تک کوئی بھی نمبر دیں۔ </h5>
                    <div class="btn-list" role="group">
                        <button type="button" class="btn btn-primary rounded mx-1 my-1 small">بہترین :
                            10</button>
                        <button type="button" class="btn btn-primary rounded mx-1 my-1 small">اچھا :
                            8</button>
                        <button type="button" class="btn btn-primary rounded mx-1 my-1 small">مناسب :
                            6</button>
                        <button type="button" class="btn btn-primary rounded mx-1 my-1 small">غیر مناسب :
                            4</button>
                        <button type="button" class="btn btn-primary rounded mx-1 my-1 small">خراب
                            :2</button>
                        <button type="button" class="btn btn-primary rounded mx-1 my-1 small">انتہائی خراب :
                            0</button>
                    </div>
                </div>
                <div class="col-md-8 col-10 offset-md-2 offset-1 pt-5">
                    <div class="was-validated text-right row">
                        <div class="feedback-options col-md-3 col-5 offset-md-2 text-left px-2">
                            <div class="dropdown my-md-1 my-3">
                                <select wire:model="md_living_qual" class="btn btn-primary dropdown py-1"
                                    type="button" area-controlledby="" data-bs-toggle="dropdown"
                                    aria-expanded="false" required>
                                    <ul class="list-unstyled dropdown-menu" aria-labelledby="hajj-reg-process">
                                        <li>
                                            <option class="dropdown-item">10</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">8</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">6</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">4</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">2</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">0</option>
                                        </li>
                                    </ul>
                                </select>
                                @error('md_living_qual')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="dropdown my-1">
                                <select wire:model="md_lift_qual" class="btn btn-primary dropdown py-1"
                                    type="button" area-controlledby="" data-bs-toggle="dropdown"
                                    aria-expanded="false" required>
                                    <ul class="list-unstyled dropdown-menu" aria-labelledby="hajj-reg-process">
                                        <li>
                                            <option class="dropdown-item">10</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">8</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">6</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">4</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">2</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">0</option>
                                        </li>
                                    </ul>
                                </select>
                                @error('md_lift_qual')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="dropdown my-1">
                                <select wire:model="md_wifi_qual" class="btn btn-primary dropdown py-1"
                                    type="button" area-controlledby="" data-bs-toggle="dropdown"
                                    aria-expanded="false" required>
                                    <ul class="list-unstyled dropdown-menu" aria-labelledby="hajj-reg-process">
                                        <li>
                                            <option class="dropdown-item">10</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">8</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">6</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">4</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">2</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">0</option>
                                        </li>
                                    </ul>
                                </select>
                                @error('md_wifi_qual')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="dropdown my-1">
                                <select wire:model="md_rmclean_qual" class="btn btn-primary dropdown py-1"
                                    type="button" area-controlledby="" data-bs-toggle="dropdown"
                                    aria-expanded="false" required>
                                    <ul class="list-unstyled dropdown-menu" aria-labelledby="hajj-reg-process">
                                        <li>
                                            <option class="dropdown-item">10</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">8</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">6</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">4</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">2</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">0</option>
                                        </li>
                                    </ul>
                                </select>
                                @error('md_rmclean_qual')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="dropdown my-1">
                                <select wire:model="md_genclean_qual" class="btn btn-primary dropdown"
                                    type="button" area-controlledby="hajj-reg-process" id="select1"
                                    data-bs-toggle="dropdown" aria-expanded="false" required>
                                    <ul class="list-unstyled dropdown-menu" aria-labelledby="hajj-reg-process">
                                        <li>
                                            <option class="dropdown-item">10</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">8</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">6</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">4</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">2</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">0</option>
                                        </li>
                                    </ul>
                                </select>
                                @error('md_genclean_qual')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="dropdown my-1">
                                <select wire:model="md_bathclean_qual" class="btn btn-primary dropdown"
                                    type="button" area-controlledby="hajj-reg-process" id="select1"
                                    data-bs-toggle="dropdown" aria-expanded="false" required>
                                    <ul class="list-unstyled dropdown-menu" aria-labelledby="hajj-reg-process">
                                        <li>
                                            <option class="dropdown-item">10</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">8</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">6</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">4</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">2</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">0</option>
                                        </li>
                                    </ul>
                                </select>
                                @error('md_bathclean_qual')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="dropdown my-1">
                                <select wire:model="md_staff_beh" class="btn btn-primary dropdown py-1"
                                    type="button" area-controlledby="hajj-reg-process" id="select1"
                                    data-bs-toggle="dropdown" aria-expanded="false" required>
                                    <ul class="list-unstyled dropdown-menu" aria-labelledby="hajj-reg-process">
                                        <li>
                                            <option class="dropdown-item">10</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">8</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">6</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">4</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">2</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">0</option>
                                        </li>
                                    </ul>
                                </select>
                                @error('md_staff_beh')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="my-md-3 my-4">
                                <input wire:model="md_room_mem_qty" type="radio" value="2-3"
                                    name="no_of_haji"><label for="no_of_haji" class="form-label small">2-3</label>
                                <input wire:model="md_room_mem_qty" value="4-5" type="radio"
                                    name="no_of_haji"><label for="no_of_haji" class="form-label small">4-5</label>
                                <input wire:model="md_room_mem_qty" value="6-7" type="radio"
                                    name="no_of_haji"><label for="no_of_haji" class="form-label small">6-7</label>
                                <input wire:model="md_room_mem_qty" value="more than 7" type="radio"
                                    name="no_of_haji"><label for="no_of_haji" class="form-label small">7سے
                                    زائد</label>
                                @error('md_room_mem_qty')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>
                        <div class="labels_div col-md-5 col-7 px-3">
                            <label class="form-label my-2">مدینہ منورہ میں رہائش/ عمارت کا معیار</label><br>
                            <label class="form-label my-2 mx-2">لفٹ </label><br>
                            <label class="form-label my-2 mx-2">وائی فائی/انٹرنیٹ</label><br>
                            <label class="form-label my-2 mx-2">کمرے کی صفائی</label><br>
                            <label class="form-label my-2 mx-2">عام صفائی</label><br>
                            <label class="form-label my-2 mx-2">باتھ روم صفائی</label><br>
                            <label class="form-label my-2 mx-2"> عملے کارویہ/برتاؤ</label><br>
                            <label class="form-label my-2 mx-2">مکہ مکرمہ: کمروں میں حجاج کرام کی
                                تعداد</label><br>

                        </div>
                        <div class=" col-xs-12 my-5 text-center nxt-prev-container">
                            <button type="button" wire:click="seventhStepSubmit"
                                class="btn btn-primary next-btn my-2 px-4">
                                <i class="bi bi-arrow-left-short"></i>آگے </button>
                            <button type="button" wire:click="back(6)"
                                class="btn btn-dark previous-btn mx-4 my-2 px-3">پیچھے <i
                                    class="bi bi-arrow-right-short"></i> </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--step7 end here-->
        <div class="tab-pane fade show container madina-meal  {{ $currentStep != 8 ? '' : 'active' }}"
            id="form08" role="tabpanel" aria-labelledby="step8">
            <div class="row">
                <div class="text-center feedback-sec col-12 py-1 text-center">
                    <h5 class="h5">نیچے دئے گئے سوالات میں سہولیات کے معیار کے بارے میں اپنی رائے دینے کے
                        لئے دس تا صفر تک کوئی بھی نمبر دیں۔ </h5>
                    <div class="btn-list" role="group">
                        <button type="button" class="btn btn-primary rounded mx-1 my-1 small">بہترین :
                            10</button>
                        <button type="button" class="btn btn-primary rounded mx-1 my-1 small">اچھا :
                            8</button>
                        <button type="button" class="btn btn-primary rounded mx-1 my-1 small">مناسب :
                            6</button>
                        <button type="button" class="btn btn-primary rounded mx-1 my-1 small">غیر مناسب :
                            4</button>
                        <button type="button" class="btn btn-primary rounded mx-1 my-1 small">خراب
                            :2</button>
                        <button type="button" class="btn btn-primary rounded mx-1 my-1 small">انتہائی خراب :
                            0</button>
                    </div>
                </div>
                <div class="col-md-8 col-10 offset-md-2 offset-1 pt-5">
                    <div class="was-validated text-right row">
                        <div class="feedback-options col-md-3 col-5 offset-md-2 text-left px-2">
                            <div class="dropdown my-lg-1 my-3">
                                <select wire:model="md_fd_place" class="btn btn-primary dropdown py-1"
                                    type="button" area-controlledby="" data-bs-toggle="dropdown"
                                    aria-expanded="false" required>
                                    <ul class="list-unstyled dropdown-menu" aria-labelledby="hajj-reg-process">
                                        <li>
                                            <option class="dropdown-item">10</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">8</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">6</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">4</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">2</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">0</option>
                                        </li>
                                    </ul>
                                </select>
                                @error('md_fd_place')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="dropdown my-1">
                                <select wire:model="md_fd_quality" class="btn btn-primary dropdown" type="button"
                                    area-controlledby="hajj-reg-process" id="select1" data-bs-toggle="dropdown"
                                    aria-expanded="false" required>
                                    <ul class="list-unstyled dropdown-menu" aria-labelledby="hajj-reg-process">
                                        <li>
                                            <option class="dropdown-item">10</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">8</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">6</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">4</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">2</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">0</option>
                                        </li>
                                    </ul>
                                </select>
                                @error('md_fd_quality')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="dropdown my-1">
                                <select wire:model="md_fd_taste" class="btn btn-primary dropdown py-1"
                                    type="button" area-controlledby="hajj-reg-process" id="select1"
                                    data-bs-toggle="dropdown" aria-expanded="false" required>
                                    <ul class="list-unstyled dropdown-menu" aria-labelledby="hajj-reg-process">
                                        <li>
                                            <option class="dropdown-item">10</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">8</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">6</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">4</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">2</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">0</option>
                                        </li>
                                    </ul>
                                </select>
                                @error('md_fd_taste')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="dropdown my-1">
                                <select wire:model="md_fd_fresh" class="btn btn-primary dropdown py-1"
                                    type="button" area-controlledby="hajj-reg-process" id="select1"
                                    data-bs-toggle="dropdown" aria-expanded="false" required>
                                    <ul class="list-unstyled dropdown-menu" aria-labelledby="hajj-reg-process">
                                        <li>
                                            <option class="dropdown-item">10</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">8</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">6</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">4</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">2</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">0</option>
                                        </li>
                                    </ul>
                                </select>
                                @error('md_fd_fresh')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="dropdown my-1">
                                <select wire:model="md_fd_qty" class="btn btn-primary dropdown py-1"
                                    type="button" area-controlledby="hajj-reg-process" id="select1"
                                    data-bs-toggle="dropdown" aria-expanded="false" required>
                                    <ul class="list-unstyled dropdown-menu" aria-labelledby="hajj-reg-process">
                                        <li>
                                            <option class="dropdown-item">10</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">8</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">6</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">4</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">2</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">0</option>
                                        </li>
                                    </ul>
                                </select>
                                @error('md_fd_qty')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="dropdown my-1">
                                <select wire:model="md_fd_staf_beh" class="btn btn-primary dropdown py-1"
                                    type="button" area-controlledby="hajj-reg-process" id="select1"
                                    data-bs-toggle="dropdown" aria-expanded="false" required>
                                    <ul class="list-unstyled dropdown-menu" aria-labelledby="hajj-reg-process">
                                        <li>
                                            <option class="dropdown-item">10</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">8</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">6</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">4</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">2</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">0</option>
                                        </li>
                                    </ul>
                                </select>
                                @error('md_fd_staf_beh')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>
                        <div class="labels_div col-lg-5 col-7 px-3">
                            <label class="form-label my-2">مدینہ منورہ میں حاجیوں کی تعداد کے تناسب سے کھانے
                                کی جگہ کی گنجائش </label><br>
                            <label class="form-label my-2">کھانے کا معیار •</label><br>
                            <label class="form-label my-2"> کھانے کا ذائقہ •</label><br>
                            <label class="form-label my-2">کھانے کی تازگی •</label><br>
                            <label class="form-label my-2">کھانے کی مقدار •</label><br>
                            <label class="form-label my-2">عملے کابرتاؤ •</label><br>

                        </div>
                        <div class=" col-xs-12 my-5 text-center nxt-prev-container">
                            <button type="button" wire:click="eighthStepSubmit"
                                class="btn btn-primary next-btn my-2 px-4">
                                <i class="bi bi-arrow-left-short"></i>آگے </button>
                            <button type="button" wire:click="back(7)"
                                class="btn btn-dark previous-btn mx-4 my-2 px-3">پیچھے <i
                                    class="bi bi-arrow-right-short"></i> </button>
                        </div>
                        <div class="col-md-6 col-8 offset-md-4 offset-2 my-5 text-center">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--step8 end here-->
        <div class="tab-pane fade show container madina-transport  {{ $currentStep != 9 ? '' : 'active' }}"
            id="form09" role="tabpanel" aria-labelledby="step9">
            <div class="row">
                <div class="text-center feedback-sec col-12 py-1 text-center">
                    <h5 class="h5">نیچے دئے گئے سوالات میں سہولیات کے معیار کے بارے میں اپنی رائے دینے کے
                        لئے دس تا صفر تک کوئی بھی نمبر دیں۔ </h5>
                    <div class="btn-list" role="group">
                        <button type="button" class="btn btn-primary rounded mx-1 my-1 small">بہترین :
                            10</button>
                        <button type="button" class="btn btn-primary rounded mx-1 my-1 small">اچھا :
                            8</button>
                        <button type="button" class="btn btn-primary rounded mx-1 my-1 small">مناسب :
                            6</button>
                        <button type="button" class="btn btn-primary rounded mx-1 my-1 small">غیر مناسب :
                            4</button>
                        <button type="button" class="btn btn-primary rounded mx-1 my-1 small">خراب
                            :2</button>
                        <button type="button" class="btn btn-primary rounded mx-1 my-1 small">انتہائی خراب :
                            0</button>
                    </div>
                </div>
                <div class="col-md-8 col-10 offset-md-2 offset-1 pt-5">
                    <div class="was-validated text-right row">
                        <div class="feedback-options col-md-3 col-5 offset-md-2 text-left px-2">
                            <div class="dropdown my-sm-1 my-4">
                                <select wire:model="mdair_to_living_trans_qual"
                                    class="btn btn-primary dropdown py-1" type="button" area-controlledby=""
                                    data-bs-toggle="dropdown" aria-expanded="false" required>
                                    <ul class="list-unstyled dropdown-menu" aria-labelledby="hajj-reg-process">
                                        <li>
                                            <option class="dropdown-item">10</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">8</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">6</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">4</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">2</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">0</option>
                                        </li>
                                    </ul>
                                </select>
                                @error('mdair_to_living_trans_qual')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="dropdown my-sm-1 my-4">
                                <select wire:model="md_lug_trans_qual" class="btn btn-primary dropdown py-1"
                                    type="button" area-controlledby="" data-bs-toggle="dropdown"
                                    aria-expanded="false" required>
                                    <ul class="list-unstyled dropdown-menu" aria-labelledby="hajj-reg-process">
                                        <li>
                                            <option class="dropdown-item">10</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">8</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">6</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">4</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">2</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">0</option>
                                        </li>
                                    </ul>
                                </select>
                                @error('md_lug_trans_qual')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="dropdown my-sm-1 my-4">
                                <select wire:model="liv_to_hrm_tr_fac" class="btn btn-primary dropdown"
                                    type="button" area-controlledby="hajj-reg-process" id="select1"
                                    data-bs-toggle="dropdown" aria-expanded="false" required>
                                    <ul class="list-unstyled dropdown-menu" aria-labelledby="hajj-reg-process">
                                        <li>
                                            <option class="dropdown-item">10</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">8</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">6</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">4</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">2</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">0</option>
                                        </li>
                                    </ul>
                                </select>
                                @error('liv_to_hrm_tr_fac')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="dropdown my-sm-1 my-3">
                                <select wire:model="md_to_mk_tr_fac" class="btn btn-primary dropdown"
                                    type="button" area-controlledby="hajj-reg-process" id="select1"
                                    data-bs-toggle="dropdown" aria-expanded="false" required>
                                    <ul class="list-unstyled dropdown-menu" aria-labelledby="hajj-reg-process">
                                        <li>
                                            <option class="dropdown-item">10</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">8</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">6</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">4</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">2</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">0</option>
                                        </li>
                                    </ul>
                                </select>
                                @error('md_to_mk_tr_fac')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="dropdown my-1">
                                <select wire:model="md_busses_avail" class="btn btn-primary dropdown py-1"
                                    type="button" area-controlledby="hajj-reg-process" id="select1"
                                    data-bs-toggle="dropdown" aria-expanded="false" required>
                                    <ul class="list-unstyled dropdown-menu" aria-labelledby="hajj-reg-process">
                                        <li>
                                            <option class="dropdown-item">10</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">8</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">6</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">4</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">2</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">0</option>
                                        </li>
                                    </ul>
                                </select>
                                @error('md_busses_avail')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="dropdown my-1">
                                <select wire:model="md_busses_cond" class="btn btn-primary dropdown py-1"
                                    type="button" area-controlledby="hajj-reg-process" id="select1"
                                    data-bs-toggle="dropdown" aria-expanded="false" required>
                                    <ul class="list-unstyled dropdown-menu" aria-labelledby="hajj-reg-process">
                                        <li>
                                            <option class="dropdown-item">10</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">8</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">6</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">4</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">2</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">0</option>
                                        </li>
                                    </ul>
                                </select>
                                @error('md_busses_cond')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="dropdown my-1">
                                <select wire:model="md_busses_aircond" class="btn btn-primary dropdown py-1"
                                    type="button" area-controlledby="hajj-reg-process" id="select1"
                                    data-bs-toggle="dropdown" aria-expanded="false" required>
                                    <ul class="list-unstyled dropdown-menu" aria-labelledby="hajj-reg-process">
                                        <li>
                                            <option class="dropdown-item">10</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">8</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">6</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">4</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">2</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">0</option>
                                        </li>
                                    </ul>
                                </select>
                                @error('md_busses_aircond')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="dropdown my-1">
                                <select wire:model="md_busses_staff_beh" class="btn btn-primary dropdown py-1"
                                    type="button" area-controlledby="hajj-reg-process" id="select1"
                                    data-bs-toggle="dropdown" aria-expanded="false" required>
                                    <ul class="list-unstyled dropdown-menu" aria-labelledby="hajj-reg-process">
                                        <li>
                                            <option class="dropdown-item">10</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">8</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">6</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">4</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">2</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">0</option>
                                        </li>
                                    </ul>
                                </select>
                                @error('md_busses_staff_beh')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>
                        <div class="labels_div col-lg-5 col-7 px-3">
                            <label class="form-label my-2">مدینہ ائیر پورٹ سے رہائش تک سفری سہولیا ت کا
                                بندوبست</label><br>
                            <label class="form-label my-2">ائیر پورٹ سے بلڈنگ تک سامان کی ترسیل کا
                                معیار</label><br>
                            <label class="form-label my-2">رہائش سے حرم لے جانے والی سفری سہولیات کا
                                معیار</label><br>
                            <label class="form-label my-2">مدینہ سے مکہ تک سفری سہولیات کا معیار</label><br>
                            <label class="form-label my-2">بسوں کی دستیابی</label><br>
                            <label class="form-label my-2">بسوں کی حالت</label><br>
                            <label class="form-label my-2">بسوں میں ائیر کنڈیشن</label><br>
                            <label class="form-label my-2">بس کے عملے کا برتاؤ</label><br>

                        </div>
                        <div class=" col-xs-12 my-5 text-center nxt-prev-container">
                            <button type="button" wire:click="ninethStepSubmit"
                                class="btn btn-primary next-btn my-2 px-4">
                                <i class="bi bi-arrow-left-short"></i>آگے </button>
                            <button type="button" wire:click="back(8)"
                                class="btn btn-dark previous-btn mx-4 my-2 px-3">پیچھے <i
                                    class="bi bi-arrow-right-short"></i> </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--step9 end here-->
        <div class="tab-pane fade show container madina-other  {{ $currentStep != 10 ? '' : 'active' }}"
            id="form10" role="tabpanel" aria-labelledby="step10">
            <div class="row">
                <div class="text-center feedback-sec col-12 py-1 text-center">
                    <h5 class="h5">نیچے دئے گئے سوالات میں سہولیات کے معیار کے بارے میں اپنی رائے دینے کے
                        لئے دس تا صفر تک کوئی بھی نمبر دیں۔ </h5>
                    <div class="btn-list" role="group">
                        <button type="button" class="btn btn-primary rounded mx-1 my-1 small">بہترین :
                            10</button>
                        <button type="button" class="btn btn-primary rounded mx-1 my-1 small">اچھا :
                            8</button>
                        <button type="button" class="btn btn-primary rounded mx-1 my-1 small">مناسب :
                            6</button>
                        <button type="button" class="btn btn-primary rounded mx-1 my-1 small">غیر مناسب :
                            4</button>
                        <button type="button" class="btn btn-primary rounded mx-1 my-1 small">خراب
                            :2</button>
                        <button type="button" class="btn btn-primary rounded mx-1 my-1 small">انتہائی خراب :
                            0</button>
                    </div>
                </div>
                <div class="col-md-8 col-10 offset-md-2 offset-1 pt-5">
                    <div class="was-validated text-right row">
                        <div class="feedback-options col-5 text-left">
                            <div class="row">
                                <div class="dropdown my-1 row px-4 text-center">
                                    <select wire:model="riaz_ul_jan_qual" class="btn btn-primary dropdown"
                                        type="button" area-controlledby="hajj-reg-process" id="select1"
                                        data-bs-toggle="dropdown" aria-expanded="false" required>
                                        <ul class="list-unstyled dropdown-menu" aria-labelledby="hajj-reg-process">
                                            <li>
                                                <option class="dropdown-item">10</option>
                                            </li>
                                            <li>
                                                <option class="dropdown-item">8</option>
                                            </li>
                                            <li>
                                                <option class="dropdown-item">6</option>
                                            </li>
                                            <li>
                                                <option class="dropdown-item">4</option>
                                            </li>
                                            <li>
                                                <option class="dropdown-item">2</option>
                                            </li>
                                            <li>
                                                <option class="dropdown-item">0</option>
                                            </li>
                                        </ul>
                                    </select>
                                    @error('riaz_ul_jan_qual')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                    <div class="my-1 mx-2">
                                        <input wire:model="is_riaz_ul_jan_ind_or_grp" value="indiv"
                                            type="radio" name="is_riaz_ul_jan_ind_or_grp" id="indiv">
                                        <label for="indiv" class="form-label mx-1 small">انفرادی </label>

                                        <input wire:model="is_riaz_ul_jan_ind_or_grp" value="grp"
                                            type="radio" name="is_riaz_ul_jan_ind_or_grp" id="grp">
                                        <label for="grp" class="form-label mx-1 small">گروپ</label>
                                        @error('is_riaz_ul_jan_ind_or_grp')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown my-md-1 my-2">
                                <select wire:model="riaz_ul_by_assis_qual" class="btn btn-primary dropdown py-1"
                                    type="button" area-controlledby="hajj-reg-process" id="select1"
                                    data-bs-toggle="dropdown" aria-expanded="false" required>
                                    <ul class="list-unstyled dropdown-menu" aria-labelledby="hajj-reg-process">
                                        <li>
                                            <option class="dropdown-item">10</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">8</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">6</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">4</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">2</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">0</option>
                                        </li>
                                    </ul>
                                </select>
                                @error('riaz_ul_by_assis_qual')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="my-md-1 my-4">
                                <input wire:model="is_40prayers" value="1" type="radio"
                                    name="is_40prayers"><label for="hajj_trainig"
                                    class="form-label mx-1 small">ہاں</label>
                                <input wire:model="is_40prayers" value="0" type="radio"
                                    name="is_40prayers"><label for="hajj_trainig"
                                    class="form-label mx-1 small">نہیں</label>
                                @error('is_isbtomakh')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>
                        <div class="labels_div col-7 px-3">
                            <label class="form-label my-2">کیا آپ نے ریاض الجنہ کیلئے بکنگ انفرادی طور پر کی
                                یا گروپ کی شکل میں بذریعہ معاون کی</label><br>
                            <label class="form-label my-2">بذریعہ معاون ریاض الجنہ کے انتظامات کا
                                معیار/بندوبست</label><br>
                            <label class="form-label my-2">کیا مدینہ منورہ میں آپ کی 40 نمازیں پوری
                                ہوئیں؟</label><br>

                        </div>
                        <div class=" col-xs-12 my-5 text-center nxt-prev-container">
                            <button type="button" wire:click="tenthStepSubmit"
                                class="btn btn-primary next-btn my-2 px-4">
                                <i class="bi bi-arrow-left-short"></i>آگے </button>
                            <button type="button" wire:click="back(9)"
                                class="btn btn-dark previous-btn mx-4 my-2 px-3">پیچھے <i
                                    class="bi bi-arrow-right-short"></i> </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--step10 end here-->
        <div class="tab-pane fade show container in-mashair  {{ $currentStep != 11 ? '' : 'active' }}"
            id="form11" role="tabpanel" aria-labelledby="step11">
            <div class="row">
                <div class="text-center feedback-sec col-12 py-1 text-center">
                    <h5 class="h5">نیچے دئے گئے سوالات میں سہولیات کے معیار کے بارے میں اپنی رائے دینے کے
                        لئے دس تا صفر تک کوئی بھی نمبر دیں۔ </h5>
                    <div class="btn-list" role="group">
                        <button type="button" class="btn btn-primary rounded mx-1 my-1 small">بہترین :
                            10</button>
                        <button type="button" class="btn btn-primary rounded mx-1 my-1 small">اچھا :
                            8</button>
                        <button type="button" class="btn btn-primary rounded mx-1 my-1 small">مناسب :
                            6</button>
                        <button type="button" class="btn btn-primary rounded mx-1 my-1 small">غیر مناسب :
                            4</button>
                        <button type="button" class="btn btn-primary rounded mx-1 my-1 small">خراب
                            :2</button>
                        <button type="button" class="btn btn-primary rounded mx-1 my-1 small">انتہائی خراب :
                            0</button>
                    </div>
                </div>
                <div class="col-md-8 col-10 offset-md-2 offset-1 pt-5">
                    <div class="was-validated text-right row">
                        <div class="feedback-options col-md-4 offset-md-2 col-5 text-left">
                            <div class="row py-md-0 py-2">
                                <div class="dropdown my-1 mx-md-2 row px-md-2 text-center">
                                    <select wire:model="mna_to_arfat_train_qual" class="btn btn-primary dropdown"
                                        type="button" area-controlledby="hajj-reg-process" id="select1"
                                        data-bs-toggle="dropdown" aria-expanded="false" required>
                                        <ul class="list-unstyled dropdown-menu" aria-labelledby="hajj-reg-process">
                                            <li>
                                                <option class="dropdown-item">10</option>
                                            </li>
                                            <li>
                                                <option class="dropdown-item">8</option>
                                            </li>
                                            <li>
                                                <option class="dropdown-item">6</option>
                                            </li>
                                            <li>
                                                <option class="dropdown-item">4</option>
                                            </li>
                                            <li>
                                                <option class="dropdown-item">2</option>
                                            </li>
                                            <li>
                                                <option class="dropdown-item">0</option>
                                            </li>
                                        </ul>
                                    </select>
                                    @error('mna_to_arfat_train_qual')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                    <div class="my-1 mx-1">
                                        <input wire:model="is_mna_to_arfat_train" value="1" type="radio"
                                            name="is_mna_to_arfat_train"><label for="airline_name"
                                            class="form-label mx-1 small">ہاں </label>
                                        <input wire:model="is_mna_to_arfat_train" value="0" type="radio"
                                            name="is_mna_to_arfat_train"><label for="airline_name"
                                            class="form-label mx-1 small">نہیں</label>
                                        @error('is_mna_to_arfat_train')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row py-md-0 py-3">
                                <div class="dropdown mx-md-2 row px-md-2 text-center">
                                    <select wire:model="mna_to_arfat_bus_qual" class="btn btn-primary dropdown"
                                        type="button" area-controlledby="hajj-reg-process" id="select1"
                                        data-bs-toggle="dropdown" aria-expanded="false" required>
                                        <ul class="list-unstyled dropdown-menu" aria-labelledby="hajj-reg-process">
                                            <li>
                                                <option class="dropdown-item">10</option>
                                            </li>
                                            <li>
                                                <option class="dropdown-item">8</option>
                                            </li>
                                            <li>
                                                <option class="dropdown-item">6</option>
                                            </li>
                                            <li>
                                                <option class="dropdown-item">4</option>
                                            </li>
                                            <li>
                                                <option class="dropdown-item">2</option>
                                            </li>
                                            <li>
                                                <option class="dropdown-item">0</option>
                                            </li>
                                        </ul>
                                    </select>
                                    @error('mna_to_arfat_bus_qual')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                    <div class="my-1 mx-1">
                                        <input wire:model="is_mna_to_arfat_bus" value="1" type="radio"
                                            name="is_mna_to_arfat_bus"><label for="airline_name"
                                            class="form-label mx-1 small">ہاں </label>
                                        <input wire:model="is_mna_to_arfat_bus" value="0" type="radio"
                                            name="is_mna_to_arfat_bus"><label for="airline_name"
                                            class="form-label mx-1 small">نہیں</label>
                                        @error('is_mna_to_arfat_bus')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="my-md-1 my-4">
                                <input wire:model="is_mktb_to_mshair_ontime" value="1" type="radio"
                                    name="is_mktb_to_mshair_ontime"><label for="hajj_trainig"
                                    class="form-label mx-1 small">ہاں</label>
                                <input wire:model="is_mktb_to_mshair_ontime" value="0" type="radio"
                                    name="is_mktb_to_mshair_ontime"><label for="hajj_trainig"
                                    class="form-label mx-1 small">نہیں</label>
                                @error('is_mktb_to_mshair_ontime')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="dropdown my-md-1 my-4">
                                <select wire:model="mna_all_fac_qual" class="btn btn-primary dropdown py-1"
                                    type="button" area-controlledby="hajj-reg-process" id="select1"
                                    data-bs-toggle="dropdown" aria-expanded="false" required>
                                    <ul class="list-unstyled dropdown-menu" aria-labelledby="hajj-reg-process">
                                        <li>
                                            <option class="dropdown-item">10</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">8</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">6</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">4</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">2</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">0</option>
                                        </li>
                                    </ul>
                                </select>
                                @error('mna_all_fac_qual')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="dropdown my-md-1 my-4">
                                <select wire:model="arfat_all_fac_qual" class="btn btn-primary dropdown py-1"
                                    type="button" area-controlledby="hajj-reg-process" id="select1"
                                    data-bs-toggle="dropdown" aria-expanded="false" required>
                                    <ul class="list-unstyled dropdown-menu" aria-labelledby="hajj-reg-process">
                                        <li>
                                            <option class="dropdown-item">10</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">8</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">6</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">4</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">2</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">0</option>
                                        </li>
                                    </ul>
                                </select>
                                @error('arfat_all_fac_qual')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="dropdown my-md-1 my-4">
                                <select wire:model="mna_arfat_fd_qual" class="btn btn-primary dropdown py-1"
                                    type="button" area-controlledby="hajj-reg-process" id="select1"
                                    data-bs-toggle="dropdown" aria-expanded="false" required>
                                    <ul class="list-unstyled dropdown-menu" aria-labelledby="hajj-reg-process">
                                        <li>
                                            <option class="dropdown-item">10</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">8</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">6</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">4</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">2</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">0</option>
                                        </li>
                                    </ul>
                                </select>
                                @error('mna_arfat_fd_qual')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="labels_div col-md-5 col-7 px-md-3 px-1">
                            <label class="form-label my-2">اگر آپ نے منی سے عرفات تک ٹرین سروس استعمال کی تو
                                اس کا معیار</label><br>
                            <label class="form-label my-2">اگر آپ نے منی سے عرفات تک بس سروس استعمال کی تو
                                اس کا معیار</label><br>
                            <label class="form-label my-2">کیا مکتب کی جانب سے بسیں مشائر لے جانے کیلئے
                                مقررہ وقت پر پہنچیں</label><br>
                            <label class="form-label my-2">منی میں سہولیات کا معیار(رہائش ، واش رومز
                                وغیرہ)</label><br>
                            <label class="form-label my-2">عرفات میں سہولیات کا معیار(رہائش ، واش رومز
                                وغیرہ)</label><br>
                            <label class="form-label my-2">منی اور عرفات میں کھانے کے انتظامات کا
                                معیار</label><br>

                        </div>
                        <div class=" col-xs-12 my-5 text-center nxt-prev-container">
                            <button type="button" wire:click="eleventhStepSubmit"
                                class="btn btn-primary next-btn my-2 px-4">
                                <i class="bi bi-arrow-left-short"></i>آگے </button>
                            <button type="button" wire:click="back(10)"
                                class="btn btn-dark previous-btn mx-4 my-2 px-3">پیچھے <i
                                    class="bi bi-arrow-right-short"></i> </button>
                        </div>

                        <div class="col-md-6 col-8 offset-md-4 offset-2 my-5 text-center">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--step11 end here-->
        <div class="tab-pane fade show container medical  {{ $currentStep != 12 ? '' : 'active' }}" id="form12"
            role="tabpanel" aria-labelledby="step12">
            <div class="row">
                <div class="text-center feedback-sec col-12 py-1 text-center">
                    <h5 class="h5">نیچے دئے گئے سوالات میں سہولیات کے معیار کے بارے میں اپنی رائے دینے کے
                        لئے دس تا صفر تک کوئی بھی نمبر دیں۔ </h5>
                    <div class="btn-list" role="group">
                        <button type="button" class="btn btn-primary rounded mx-1 my-1 small">بہترین :
                            10</button>
                        <button type="button" class="btn btn-primary rounded mx-1 my-1 small">اچھا :
                            8</button>
                        <button type="button" class="btn btn-primary rounded mx-1 my-1 small">مناسب :
                            6</button>
                        <button type="button" class="btn btn-primary rounded mx-1 my-1 small">غیر مناسب :
                            4</button>
                        <button type="button" class="btn btn-primary rounded mx-1 my-1 small">خراب
                            :2</button>
                        <button type="button" class="btn btn-primary rounded mx-1 my-1 small">انتہائی خراب :
                            0</button>
                    </div>
                </div>
                <div class="col-md-8 col-10 offset-md-2 offset-1 pt-5">
                    <div class="was-validated text-right row">
                        <div class="feedback-options col-md-4 offset-md-2 col-5 text-left">
                            <div class="dropdown my-md-1 my-4">
                                <select wire:model="pk_hos_disp_fac" class="btn btn-primary dropdown py-1"
                                    type="button" area-controlledby="hajj-reg-process" id="select1"
                                    data-bs-toggle="dropdown" aria-expanded="false" required>
                                    <ul class="list-unstyled dropdown-menu" aria-labelledby="hajj-reg-process">
                                        <li>
                                            <option class="dropdown-item">10</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">8</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">6</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">4</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">2</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">0</option>
                                        </li>
                                    </ul>
                                </select>
                                @error('pk_hos_disp_fac')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="dropdown my-1">
                                <select wire:model="doc_para_beh" class="btn btn-primary dropdown py-1"
                                    type="button" area-controlledby="hajj-reg-process" id="select1"
                                    data-bs-toggle="dropdown" aria-expanded="false" required>
                                    <ul class="list-unstyled dropdown-menu" aria-labelledby="hajj-reg-process">
                                        <li>
                                            <option class="dropdown-item">10</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">8</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">6</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">4</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">2</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">0</option>
                                        </li>
                                    </ul>
                                </select>
                                @error('doc_para_beh')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="dropdown my-1">
                                <select wire:model="med_avail" class="btn btn-primary dropdown py-1"
                                    type="button" area-controlledby="hajj-reg-process" id="select1"
                                    data-bs-toggle="dropdown" aria-expanded="false" required>
                                    <ul class="list-unstyled dropdown-menu" aria-labelledby="hajj-reg-process">
                                        <li>
                                            <option class="dropdown-item">10</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">8</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">6</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">4</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">2</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">0</option>
                                        </li>
                                    </ul>
                                </select>
                                @error('med_avail')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="dropdown my-1 ">
                                <select wire:model="ambul_avail" class="btn btn-primary dropdown py-1"
                                    type="button" area-controlledby="hajj-reg-process" id="select1"
                                    data-bs-toggle="dropdown" aria-expanded="false" required>
                                    <ul class="list-unstyled dropdown-menu" aria-labelledby="hajj-reg-process">
                                        <li>
                                            <option class="dropdown-item">10</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">8</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">6</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">4</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">2</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">0</option>
                                        </li>
                                    </ul>
                                </select>
                                @error('ambul_avail')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="labels_div col-md-5 col-7 px-md-3 px-1">
                            <label class="form-label my-2">پاکستانی ہسپتال/ ڈسپنسریوں میں عمومی انتظامات و
                                سہولیات کا معیار</label><br>
                            <label class="form-label my-2">ڈاکٹر/پیرامیڈکس کا برتاؤ</label><br>
                            <label class="form-label my-2">ادویات کی دستیابی/معیار</label><br>
                            <label class="form-label my-2">ایمبولینس کی دستیابی</label><br>

                        </div>
                        <div class=" col-xs-12 my-5 text-center nxt-prev-container">
                            <button type="button" wire:click="twelvethStepSubmit"
                                class="btn btn-primary next-btn my-2 px-4">
                                <i class="bi bi-arrow-left-short"></i>آگے </button>
                            <button type="button" wire:click="back(11)"
                                class="btn btn-dark previous-btn mx-4 my-2 px-3">پیچھے <i
                                    class="bi bi-arrow-right-short"></i> </button>

                        </div>
                        <div class="col-md-6 col-8 offset-md-4 offset-2 my-5 text-center">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--step12 end here-->
        <div class="tab-pane fade show container pak_hajj_mission  {{ $currentStep != 13 ? '' : 'active' }}"
            id="form13" role="tabpanel" aria-labelledby="step13">
            <div class="row">
                <div class="text-center feedback-sec col-12 py-1 text-center">
                    <h5 class="h5">نیچے دئے گئے سوالات میں سہولیات کے معیار کے بارے میں اپنی رائے دینے کے
                        لئے دس تا صفر تک کوئی بھی نمبر دیں۔ </h5>
                    <div class="btn-list" role="group">
                        <button type="button" class="btn btn-primary rounded mx-1 my-1 small">بہترین :
                            10</button>
                        <button type="button" class="btn btn-primary rounded mx-1 my-1 small">اچھا :
                            8</button>
                        <button type="button" class="btn btn-primary rounded mx-1 my-1 small">مناسب :
                            6</button>
                        <button type="button" class="btn btn-primary rounded mx-1 my-1 small">غیر مناسب :
                            4</button>
                        <button type="button" class="btn btn-primary rounded mx-1 my-1 small">خراب
                            :2</button>
                        <button type="button" class="btn btn-primary rounded mx-1 my-1 small">انتہائی خراب :
                            0</button>
                    </div>
                </div>
                <div class="col-md-8 col-11 offset-md-2 mt-4">
                    <div class="was-validated text-right row">
                        <div class="feedback-options col-md-3 offset-md-2 col-4 text-left">
                            <div class="dropdown mb-md-2 mt-md-1 mt-3">
                                <select wire:model="phm_cont_serv_fac" class="btn btn-primary dropdown py-1"
                                    type="button" area-controlledby="hajj-reg-process" id="select1"
                                    data-bs-toggle="dropdown" aria-expanded="false" required>
                                    <ul class="list-unstyled dropdown-menu" aria-labelledby="hajj-reg-process">
                                        <li>
                                            <option class="dropdown-item">10</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">8</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">6</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">4</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">2</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">0</option>
                                        </li>
                                    </ul>
                                </select>
                                @error('phm_cont_serv_fac')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="dropdown my-md-2 my-3 py-md-0 py-2">
                                <select wire:model="phm_compl_serv_fac" class="btn btn-primary dropdown py-1"
                                    type="button" area-controlledby="hajj-reg-process" id="select1"
                                    data-bs-toggle="dropdown" aria-expanded="false" required>
                                    <ul class="list-unstyled dropdown-menu" aria-labelledby="hajj-reg-process">
                                        <li>
                                            <option class="dropdown-item">10</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">8</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">6</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">4</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">2</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">0</option>
                                        </li>
                                    </ul>
                                </select>
                                @error('phm_compl_serv_fac')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="dropdown my-md-1 my-3 py-md-0 py-2">
                                <select wire:model="phm_lug_lost_serv" class="btn btn-primary dropdown py-1"
                                    type="button" area-controlledby="hajj-reg-process" id="select1"
                                    data-bs-toggle="dropdown" aria-expanded="false" required>
                                    <ul class="list-unstyled dropdown-menu" aria-labelledby="hajj-reg-process">
                                        <li>
                                            <option class="dropdown-item">10</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">8</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">6</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">4</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">2</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">0</option>
                                        </li>
                                    </ul>
                                </select>
                                @error('phm_lug_lost_serv')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="dropdown my-md-1 my-2">
                                <select wire:model="phm_hos_disp_fac" class="btn btn-primary dropdown py-1"
                                    type="button" area-controlledby="hajj-reg-process" id="select1"
                                    data-bs-toggle="dropdown" aria-expanded="false" required>
                                    <ul class="list-unstyled dropdown-menu" aria-labelledby="hajj-reg-process">
                                        <li>
                                            <option class="dropdown-item">10</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">8</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">6</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">4</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">2</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">0</option>
                                        </li>
                                    </ul>
                                </select>
                                @error('phm_hos_disp_fac')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="dropdown my-md-1 my-2">
                                <select wire:model="phm_hrm_guid_fac" class="btn btn-primary dropdown py-1"
                                    type="button" area-controlledby="hajj-reg-process" id="select1"
                                    data-bs-toggle="dropdown" aria-expanded="false" required>
                                    <ul class="list-unstyled dropdown-menu" aria-labelledby="hajj-reg-process">
                                        <li>
                                            <option class="dropdown-item">10</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">8</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">6</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">4</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">2</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">0</option>
                                        </li>
                                    </ul>
                                </select>
                                @error('phm_hrm_guid_fac')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="dropdown my-md-2 my-3 py-md-0 py-1">
                                <select wire:model="haj_assis_serv" class="btn btn-primary dropdown py-1"
                                    type="button" area-controlledby="hajj-reg-process" id="select1"
                                    data-bs-toggle="dropdown" aria-expanded="false" required>
                                    <ul class="list-unstyled dropdown-menu" aria-labelledby="hajj-reg-process">
                                        <li>
                                            <option class="dropdown-item">10</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">8</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">6</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">4</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">2</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">0</option>
                                        </li>
                                    </ul>
                                </select>
                                @error('haj_assis_serv')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="my-md-2 my-3 py-md-0 py-1">
                                <input wire:model="is_phm_call_fac" value="1" type="radio"
                                    name="is_phm_call_fac"><label for="hajj_trainig"
                                    class="form-label mx-1 small">ہاں</label>
                                <input wire:model="is_phm_call_fac" value="0" type="radio"
                                    name="is_phm_call_fac"><label for="hajj_trainig"
                                    class="form-label mx-1 small">نہیں</label>
                                @error('is_phm_call_fac')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="dropdown my-1">
                                <select wire:model="phm_call_qual" class="btn btn-primary dropdown py-1"
                                    type="button" area-controlledby="hajj-reg-process" id="select1"
                                    data-bs-toggle="dropdown" aria-expanded="false" required>
                                    <ul class="list-unstyled dropdown-menu" aria-labelledby="hajj-reg-process">
                                        <li>
                                            <option class="dropdown-item">10</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">8</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">6</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">4</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">2</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">0</option>
                                        </li>
                                    </ul>
                                </select>
                                @error('phm_call_qual')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="my-2">
                                <input wire:model="is_phm_gift" type="radio" name="is_phm_gift"
                                    value="1"><label for="hajj_trainig"
                                    class="form-label mx-1 small">ہاں</label>
                                <input wire:model="is_phm_gift" type="radio" name="is_phm_gift"
                                    value="0"><label for="hajj_trainig"
                                    class="form-label mx-1 small">نہیں</label>
                                @error('is_phm_gift')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="dropdown py-md-0">
                                <select wire:model="phm_overall_fac" class="btn btn-primary dropdown py-1"
                                    type="button" area-controlledby="hajj-reg-process" id="select1"
                                    data-bs-toggle="dropdown" aria-expanded="false" required>
                                    <ul class="list-unstyled dropdown-menu" aria-labelledby="hajj-reg-process">
                                        <li>
                                            <option class="dropdown-item">10</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">8</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">6</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">4</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">2</option>
                                        </li>
                                        <li>
                                            <option class="dropdown-item">0</option>
                                        </li>
                                    </ul>
                                </select>
                                @error('phm_overall_fac')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="my-md-1 my-3 py-2">
                                <input wire:model="is_again_gov_haj_schem" type="radio"
                                    name="is_again_gov_haj_schem" value="1"><label for="hajj_trainig"
                                    class="form-label mx-1 small">ہاں</label>
                                <input wire:model="is_again_gov_haj_schem" type="radio"
                                    name="is_again_gov_haj_schem" value="0"><label for="hajj_trainig"
                                    class="form-label mx-1 small">نہیں</label>
                                @error('is_again_gov_haj_schem')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>
                        <div class="labels_div col-md-6 col-8 px-md-3">
                            <label class="form-label my-2">دفتر پاکستان حج مشن سے مشکل کی صورت میں رابطہ و
                                امداد کا معیار</label><br>
                            <label class="form-label my-2">مشن کی جانب سےشکایت کے ازالہ کیلئے کی گئی خدمات
                                کا معیار</label><br>
                            <label class="form-label my-2">سامان گم ہو جانے کی صورت میں عملے کے تعاون وخدمات
                                کا معیار</label><br>
                            <label class="form-label my-2">پاکستانی ہسپتال/ ڈسپنسریوں میں سہولیات کا
                                معیار</label><br>
                            <label class="form-label my-2">حرم شریف میں حجاج کی رہنمائی کے
                                انتظامات</label><br>
                            <label class="form-label my-2">معاونین حجاج کی جانب سے حجاج کرام کی رہنمائی
                                کیلئے دی گئی خدمات کا معیار </label><br>
                            <label class="form-label my-2">مشن کی جانب سے قائم کردہ کال سینٹر کی سہولیات سے
                                استفادہ کیا؟</label><br>
                            <label class="form-label my-2">اگر ہاں تو اس کا معیار</label><br>
                            <label class="form-label my-2">کیا مشن کی جانب سے آپ کو تحفہ دیا گیا</label><br>
                            <label class="form-label my-2">مجموعی طور پر تمام سہولیات کا معیار</label><br>
                            <label class="form-label my-2">کیا آپ دوبارہ گورنمنٹ حج اسکیم میں حج ادا کرنا
                                چاہیں گے۔</label><br>

                        </div>
                        <div class=" col-xs-12 my-5 text-center nxt-prev-container">
                            <button type="button" wire:click="thirteenthStepSubmit"
                                class="btn btn-primary next-btn my-2 px-4">
                                <i class="bi bi-arrow-left-short"></i>آگے </button>
                            <button type="button" wire:click="back(12)"
                                class="btn btn-dark previous-btn mx-4 my-2 px-3">پیچھے <i
                                    class="bi bi-arrow-right-short"></i> </button>

                        </div>
                        <div class="col-md-6 col-8 offset-md-4 offset-2 my-5 text-center">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--step13 end here-->
        <div class="tab-pane fade show container review  {{ $currentStep != 14 ? '' : 'active' }}" id="form14"
            role="tabpanel" aria-labelledby="step14">
            <div class="row">
                <div class="text-center feedback-sec col-12 py-1 text-center">
                    <h5 class="h5">نیچے دئے گئے سوالات میں سہولیات کے معیار کے بارے میں اپنی رائے دینے کے
                        لئے دس تا صفر تک کوئی بھی نمبر دیں۔ </h5>
                    <div class="btn-list" role="group">
                        <button type="button" class="btn btn-primary rounded mx-1 my-1 small">بہترین :
                            10</button>
                        <button type="button" class="btn btn-primary rounded mx-1 my-1 small">اچھا :
                            8</button>
                        <button type="button" class="btn btn-primary rounded mx-1 my-1 small">مناسب :
                            6</button>
                        <button type="button" class="btn btn-primary rounded mx-1 my-1 small">غیر مناسب :
                            4</button>
                        <button type="button" class="btn btn-primary rounded mx-1 my-1 small">خراب
                            :2</button>
                        <button type="button" class="btn btn-primary rounded mx-1 my-1 small">انتہائی خراب :
                            0</button>
                    </div>
                </div>
                <div class="col-md-8 col-10 offset-md-2 offset-1 mt-5 pt-5">
                    <div class="was-validated text-right row">
                        <div class="feedback-options col-md-8 col-12 offset-md-2 text-right">
                            <label class="form-label my-2">حجاج کے انتظامات پر عمومی تبصرہ یا تجاویز</label>
                            <input wire:model="arrangments_suggest" type="text" name="suggestions"
                                class="col-12 my-1">
                            @error('arrangments_suggest')
                                <span class="error">{{ $message }}</span>
                            @enderror
                            <label class="form-label my-2">مورخہ </label><br>
                            <input wire:model="date_form_sbmt" type="date" name="submit_date"
                                class="col-12 my-2">
                            @error('date_form_sbmt')
                                <span class="error">{{ $message }}</span>
                            @enderror
                            <label class="form-label my-2">حاجی کے دستخط </label><br>
                            <input wire:model="haji_signature" type="signature" name="Haji_sign"
                                class="col-12 my-1">
                            @error('haji_signature')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class=" col-xs-12 my-5 text-center nxt-prev-container">
                            <button type="button" wire:click="fourteenthStepSubmit"
                                class="btn btn-primary next-btn my-2 px-4">
                                <i class="bi bi-arrow-left-short"></i>آگے </button>
                            <button type="button" wire:click="back(13)"
                                class="btn btn-dark previous-btn mx-4 my-2 px-3">پیچھے <i
                                    class="bi bi-arrow-right-short"></i> </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--step14 end here-->
        <div class="tab-pane fade show container review  {{ $currentStep != 15 ? '' : 'active' }}" id="form15"
            role="tabpanel" aria-labelledby="step15">
            <div class="row">

                <div class="col-md-12 col-12 mt-5 pt-5">
                    <table class="table table-bordered table-striped">
                        <tbody>
                            <tr>
                                <td>{{ $name }}</td>
                                <td>نام</td>
                            </tr>

                            <tr>
                                <td>{{ $passport_no }}</td>
                                <td>پاسپورٹ نمبر</td>
                            </tr>
                            <tr>
                                <td>{{ $hform_no }}</td>
                                <td> حج فارم نمبر</td>
                            </tr>
                            <tr>
                                <td>{{ $maktab_no }}</td>
                                <td> مکتب نمبر </td>
                            </tr>
                            <tr>
                                <td>{{ $building_no }}</td>
                                <td> بلڈنگ نمبر </td>
                            </tr>
                            <tr>
                                <td>{{ $pak_mob_no }}</td>
                                <td>پاکستانی موبائل نمبر </td>
                            </tr>
                            <!--step1--->
                            <tr>
                                <td>{{ $hform_sbmt_qual }}</td>
                                <td>حج فارم جمع کروانے کے عمل کا معیار </td>
                            </tr>

                            <tr>
                                <td>{{ $mra_info_qual }}</td>
                                <td>وزارت مذہبی امور کی جانب سے مختلف مراحل پر اطلاع دیئے جانے کا معیار </td>
                            </tr>

                            <tr>
                                <td>{{ $is_obt_train == 1 ? 'ہاں' : 'نہیں' }}</td>
                                <td>کیا سعودی عرب روانگی سے قبل حج کی تربیت حاصل کی؟ </td>
                            </tr>

                            <tr>
                                <td>{{ $obt_train_qual }}</td>
                                <td>اگر ہاں تو اس کی افادیت ؟ </td>
                            </tr>

                            <tr>
                                <td>{{ $camp_fac_qual }}</td>
                                <td>حاجی کیمپ میں سہولیات کا معیار </td>
                            </tr>

                            <tr>
                                <td>{{ $is_rec_hcnic == 1 ? 'ہاں' : 'نہیں' }}</td>
                                <td>کیا روانگی سے قبل آپ کو حاجی کیمپ سے حج شناختی کارڈ ملا؟ </td>
                            </tr>
                            <tr>
                                <td>{{ $is_rec_logtag == 1 ? 'ہاں' : 'نہیں' }}</td>
                                <td>کیا حاجی کیمپ یا ائیر پورٹ پر آپ کو سامان پر چسپاں کرنے کیلئے شناختی اسٹیکر مہیا کیا
                                    گیا؟ </td>
                            </tr>
                            <tr>
                                <td>{{ $is_rec_infomat == 1 ? 'ہاں' : 'نہیں' }}</td>
                                <td>کیا وزارت کی طرف سے معلوماتی مواد ملا ؟ </td>
                            </tr>
                            <tr>
                                <td>{{ $obt_infomat_qual }}</td>
                                <td>اگر ہاں تو اس کی افادیت </td>
                            </tr>
                            <tr>
                                <td>{{ $is_rec_ticpasvis == 1 ? 'ہاں' : 'نہیں' }}</td>
                                <td>کیا آپ کو ٹکٹ ، پاسپورٹ اور ویزہ فلائٹ سے دو روز قبل ،حاجی کیمپ سے ملا؟ </td>
                            </tr>
                            <!--step2-->
                            <tr>
                                <td>{{ $pairp_fac }}</td>
                                <td>پاکستانی ائیرپو رٹ پر سہولیات کا معیار </td>
                            </tr>
                            <tr>
                                <td>{{ $pair_line }}</td>
                                <td>ائیر لائن کا نام</td>
                            </tr>
                            <tr>
                                <td>{{ $pairl_qual }}</td>
                                <td>ائیر لائن کا معیار </td>
                            </tr>
                            <tr>
                                <td>{{ $is_dep_ontime == 1 ? 'ہاں' : 'نہیں' }}</td>
                                <td>کیا پروازبروقت روانہ ہوئی؟ </td>
                            </tr>
                            <tr>
                                <td>{{ $pairl_staf_beh }}</td>
                                <td>ائیر لائن کے عملے کا برتاؤ </td>
                            </tr>
                            <tr>
                                <td>{{ $is_isbtomakh == 1 ? 'ہاں' : 'نہیں' }}</td>
                                <td>کیا آپ اسلام آباد سے روڈ ٹو مکہ سکیم کے تحت سعودی عرب پہنچے؟ </td>
                            </tr>
                            <!--step3-->

                            <tr>
                                <td>{{ $mk_living_qual }}</td>
                                <td>مکہ مکرمہ میں رہائش/ عمارت کا معیار </td>
                            </tr>
                            <tr>
                                <td>{{ $mk_lift_qual }}</td>
                                <td>لفٹ</td>
                            </tr>
                            <tr>
                                <td>{{ $mk_wifi_qual }}</td>
                                <td>وائی فائی/انٹرنیٹ</td>
                            </tr>
                            <tr>
                                <td>{{ $mk_rmclean_qual }}</td>
                                <td>کمرے کی صفائی </td>
                            </tr>
                            <tr>
                                <td>{{ $mk_genclean_qual }}</td>
                                <td>عام صفائی </td>
                            </tr>
                            <tr>
                                <td>{{ $mk_bathclean_qual }}</td>
                                <td>باتھ روم صفائی </td>
                            </tr>
                            <tr>
                                <td>{{ $mk_staff_beh }}</td>
                                <td>عملے کارویہ/برتاؤ </td>
                            </tr>

                            <tr>
                                <td>{{ $mk_room_mem_qty }}</td>
                                <td>مکہ مکرمہ: کمروں میں حجاج کرام کی تعداد</td>
                            </tr>
                            <!--endof step4-->
                            <tr>
                                <td>{{ $mk_fd_place }}</td>
                                <td>مکہ مکرمہ میں حاجیوں کی تعداد کے تناسب سے کھانے کی جگہ کی گنجائش</td>
                            </tr>
                            <tr>
                                <td>{{ $mk_fd_quality }}</td>
                                <td>کھانے کا معیار</td>
                            </tr>
                            <tr>
                                <td>{{ $mk_fd_taste }}</td>
                                <td>کھانے کا ذائقہ</td>
                            </tr>
                            <tr>
                                <td>{{ $mk_fd_fresh }}</td>
                                <td>کھانے کی تازگی</td>
                            </tr>
                            <tr>
                                <td>{{ $mk_fd_qty }}</td>
                                <td>کھانے کی مقدار</td>
                            </tr>
                            <tr>
                                <td>{{ $mk_fd_staf_beh }}</td>
                                <td>عملے کابرتاؤ</td>
                            </tr>
                            <!--endof step5-->
                            <tr>
                                <td>{{ $mk_lug_trans_qual }}</td>
                                <td>ائیر پورٹ سے بلڈنگ تک سامان کی ترسیل کا معیار/بندوبست</td>
                            </tr>
                            <tr>
                                <td>{{ $jd_to_mk_tr_fac }}</td>
                                <td>جدہ سے مکہ سفری سہولیا ت کا معیار</td>
                            </tr>
                            <tr>
                                <td>{{ $room_to_hrm_trans_qual }}</td>
                                <td>رہائش سے حرم لے جانے والی سفری سہولیات کا معیار</td>
                            </tr>
                            <tr>
                                <td>{{ $mk_to_md_tr_qual }}</td>
                                <td>مکہ سے مدینہ سفری سہولیا ت کا معیار</td>
                            </tr>
                            <tr>
                                <td>{{ $mk_busses_avail }}</td>
                                <td>بسوں کی دستیابی</td>
                            </tr>
                            <tr>
                                <td>{{ $mk_busses_cond }}</td>
                                <td>بسوں کی حالت</td>
                            </tr>
                            <tr>
                                <td>{{ $mk_busses_aircond }}</td>
                                <td>بسوں میں ائیر کنڈیشن</td>
                            </tr>
                            <tr>
                                <td>{{ $mk_busses_staff_beh }}</td>
                                <td>بس کے عملے کا برتاؤ</td>
                            </tr>
                            <!--endof step6-->
                            <tr>
                                <td>{{ $md_living_qual }}</td>
                                <td>مدینہ منورہ میں رہائش/ عمارت کا معیار</td>
                            </tr>
                            <tr>
                                <td>{{ $md_lift_qual }}</td>
                                <td>لفٹ</td>
                            </tr>
                            <tr>
                                <td>{{ $md_wifi_qual }}</td>
                                <td>وائی فائی/انٹرنیٹ</td>
                            </tr>
                            <tr>
                                <td>{{ $md_rmclean_qual }}</td>
                                <td>کمرے کی صفائی</td>
                            </tr>
                            <tr>
                                <td>{{ $md_genclean_qual }}</td>
                                <td>عام صفائی</td>
                            </tr>
                            <tr>
                                <td>{{ $md_bathclean_qual }}</td>
                                <td>باتھ روم صفائی</td>
                            </tr>
                            <tr>
                                <td>{{ $md_staff_beh }}</td>
                                <td>عملے کارویہ/برتاؤ</td>
                            </tr>
                            <tr>
                                <td>{{ $md_room_mem_qty }}</td>
                                <td>مکہ مکرمہ: کمروں میں حجاج کرام کی تعداد</td>
                            </tr>
                            <!--endof step7-->
                            <tr>
                                <td>{{ $md_fd_place }}</td>
                                <td>مدینہ منورہ میں حاجیوں کی تعداد کے تناسب سے کھانے کی جگہ کی گنجائش</td>
                            </tr>
                            <tr>
                                <td>{{ $md_fd_quality }}</td>
                                <td>کھانے کا معیار </td>
                            </tr>
                            <tr>
                                <td>{{ $md_fd_taste }}</td>
                                <td>کھانے کا ذائقہ </td>
                            </tr>
                            <tr>
                                <td>{{ $md_fd_fresh }}</td>
                                <td>کھانے کی تازگی </td>
                            </tr>
                            <tr>
                                <td>{{ $md_fd_qty }}</td>
                                <td>کھانے کی مقدار </td>
                            </tr>
                            <tr>
                                <td>{{ $md_fd_staf_beh }}</td>
                                <td>عملے کابرتاؤ </td>
                            </tr>
                            <!--endof step8-->

                            <tr>
                                <td>{{ $mdair_to_living_trans_qual }}</td>
                                <td>مدینہ ائیر پورٹ سے رہائش تک سفری سہولیا ت کا بندوبست </td>
                            </tr>
                            <tr>
                                <td>{{ $md_lug_trans_qual }}</td>
                                <td>ائیر پورٹ سے بلڈنگ تک سامان کی ترسیل کا معیار </td>
                            </tr>
                            <tr>
                                <td>{{ $liv_to_hrm_tr_fac }}</td>
                                <td>رہائش سے حرم لے جانے والی سفری سہولیات کا معیار</td>
                            </tr>
                            <tr>
                                <td>{{ $md_to_mk_tr_fac }}</td>
                                <td>مدینہ سے مکہ تک سفری سہولیات کا معیار </td>
                            </tr>
                            <tr>
                                <td>{{ $md_busses_avail }}</td>
                                <td>بسوں کی دستیابی </td>
                            </tr>
                            <tr>
                                <td>{{ $md_busses_cond }}</td>
                                <td>بسوں کی حالت </td>
                            </tr>
                            <tr>
                                <td>{{ $md_busses_aircond }}</td>
                                <td>بسوں میں ائیر کنڈیشن </td>
                            </tr>
                            <tr>
                                <td>{{ $md_busses_staff_beh }}</td>
                                <td>بس کے عملے کا برتاؤ </td>
                            </tr>
                            <!--endof step9-->
                            <tr>
                                <td>{{ $is_riaz_ul_jan_ind_or_grp == 'indiv' ? 'انفرادی' : 'گروپ' }}</td>
                                <td>کیا آپ نے ریاض الجنہ کیلئے بکنگ انفرادی طور پر کی یا گروپ کی شکل میں بذریعہ معاون کی
                                </td>
                            </tr>
                            <tr>
                                <td>{{ $riaz_ul_jan_qual }}</td>
                                <td>کیا آپ نے ریاض الجنہ کیلئے بکنگ انفرادی طور پر کی یا گروپ کی شکل میں بذریعہ معاون کی
                                    اور اس کا معیار؟ </td>
                            </tr>
                            <tr>
                                <td>{{ $riaz_ul_by_assis_qual }}</td>
                                <td>بذریعہ معاون ریاض الجنہ کے انتظامات کا معیار/بندوبست </td>
                            </tr>
                            <tr>
                                <td>{{ $is_40prayers == 1 ? 'ہاں' : 'نہیں' }}</td>
                                <td>کیا مدینہ منورہ میں آپ کی 40 نمازیں پوری ہوئیں؟ </td>
                            </tr>
                            <!--endof step10-->
                            <tr>
                                <td>{{ $is_mna_to_arfat_train == 1 ? 'ہاں' : 'نہیں' }}</td>
                                <td>اگر آپ نے منی سے عرفات تک ٹرین سروس استعمال کی </td>
                            </tr>
                            <tr>
                                <td>{{ $mna_to_arfat_train_qual }}</td>
                                <td>اگر آپ نے منی سے عرفات تک ٹرین سروس استعمال کی تو اس کا معیار </td>
                            </tr>
                            <tr>
                                <td>{{ $is_mna_to_arfat_bus == 1 ? 'ہاں' : 'نہیں' }}</td>
                                <td>اگر آپ نے منی سے عرفات تک بس سروس استعمال کی </td>
                            </tr>
                            <tr>
                                <td>{{ $mna_to_arfat_bus_qual }}</td>
                                <td>اگر آپ نے منی سے عرفات تک بس سروس استعمال کی تو اس کا معیار </td>
                            </tr>
                            <tr>
                                <td>{{ $is_mktb_to_mshair_ontime == 1 ? 'ہاں' : 'نہیں' }}</td>
                                <td>کیا مکتب کی جانب سے بسیں مشائر لے جانے کیلئے مقررہ وقت پر پہنچیں </td>
                            </tr>
                            <tr>
                                <td>{{ $mna_all_fac_qual }}</td>
                                <td>منی میں سہولیات کا معیار(رہائش ، واش رومز وغیرہ) </td>
                            </tr>
                            <tr>
                                <td>{{ $arfat_all_fac_qual }}</td>
                                <td>عرفات میں سہولیات کا معیار(رہائش ، واش رومز وغیرہ) </td>
                            </tr>
                            <tr>
                                <td>{{ $mna_arfat_fd_qual }}</td>
                                <td>منی اور عرفات میں کھانے کے انتظامات کا معیار </td>
                            </tr>
                            <!--endof step11-->
                            <tr>
                                <td>{{ $pk_hos_disp_fac }}</td>
                                <td>پاکستانی ہسپتال/ ڈسپنسریوں میں عمومی انتظامات و سہولیات کا معیار </td>
                            </tr>
                            <tr>
                                <td>{{ $doc_para_beh }}</td>
                                <td>ڈاکٹر/پیرامیڈکس کا برتاؤ </td>
                            </tr>
                            <tr>
                                <td>{{ $med_avail }}</td>
                                <td>ادویات کی دستیابی/معیار </td>
                            </tr>
                            <tr>
                                <td>{{ $ambul_avail }}</td>
                                <td>ایمبولینس کی دستیابی </td>
                            </tr>
                            <!--endof step12-->

                            <tr>
                                <td>{{ $phm_cont_serv_fac }}</td>
                                <td>دفتر پاکستان حج مشن سے مشکل کی صورت میں رابطہ و امداد کا معیار</td>
                            </tr>
                            <tr>
                                <td>{{ $phm_compl_serv_fac }}</td>
                                <td>مشن کی جانب سےشکایت کے ازالہ کیلئے کی گئی خدمات کا معیار </td>
                            </tr>
                            <tr>
                                <td>{{ $phm_lug_lost_serv }}</td>
                                <td>سامان گم ہو جانے کی صورت میں عملے کے تعاون وخدمات کا معیار </td>
                            </tr>
                            <tr>
                                <td>{{ $phm_hos_disp_fac }}</td>
                                <td>پاکستانی ہسپتال/ ڈسپنسریوں میں سہولیات کا معیار </td>
                            </tr>
                            <tr>
                                <td>{{ $phm_hrm_guid_fac }}</td>
                                <td>حرم شریف میں حجاج کی رہنمائی کے انتظامات </td>
                            </tr>
                            <tr>
                                <td>{{ $haj_assis_serv }}</td>
                                <td>معاونین حجاج کی جانب سے حجاج کرام کی رہنمائی کیلئے دی گئی خدمات کا معیار </td>
                            </tr>
                            <tr>
                                <td>{{ $is_phm_call_fac == 1 ? 'ہاں' : 'نہیں' }}</td>
                                <td>مشن کی جانب سے قائم کردہ کال سینٹر کی سہولیات سے استفادہ کیا؟ </td>
                            </tr>
                            <tr>
                                <td>{{ $phm_call_qual }}</td>
                                <td>اگر ہاں تو اس کا معیار </td>
                            </tr>
                            <tr>
                                <td>{{ $is_phm_gift == 1 ? 'ہاں' : 'نہیں' }}</td>
                                <td>کیا مشن کی جانب سے آپ کو تحفہ دیا گیا </td>
                            </tr>
                            <tr>
                                <td>{{ $phm_overall_fac }}</td>
                                <td>مجموعی طور پر تمام سہولیات کا معیار </td>
                            </tr>
                            <tr>
                                <td>{{ $is_again_gov_haj_schem == 1 ? 'ہاں' : 'نہیں' }}</td>
                                <td>کیا آپ دوبارہ گورنمنٹ حج اسکیم میں حج ادا کرنا چاہیں گے۔ </td>
                            </tr>
                            <!--endof step13-->



                            <tr>
                                <td>{{ $arrangments_suggest }}</td>
                                <td>حجاج کے انتظامات پر عمومی تبصرہ یا تجاویز </td>
                            </tr>
                            <tr>
                                <td>{{ $date_form_sbmt }}</td>
                                <td>مورخہ </td>
                            </tr>
                            <tr>
                                <td>{{ $haji_signature }}</td>
                                <td>حاجی کے دستخط </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="col-6 my-2 text-left">
                                        <button type="submit" wire:click="submitForm"
                                            class="btn btn-primary next-btn my-2 px-4">جمع
                                            کروائیں</button>
                                    </div>
                                </td>
                                <td>
                                    <button type="button" wire:click="back(14)"
                                        class="btn btn-dark previous-btn mx-4 my-2 px-3">پیچھے</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!--tab-content-->
    <div id="side_bar" class="sidebar">
        <ul class="nav nav-tabs flex-column py-2 px-4 text-center" id="myTab" role="tablist">
            <li class="nav-item my-2 {{ $currentStep != 1 ? '' : 'active' }}">
                <button class="btn nav-link tab1 col {{ $currentStep != 1 ? '' : 'active' }}" data-toggle="tab"
                    href="#form01" role="tab" aria-controls="step1" aria-selected="true">حاجی کے
                    کوائف</button>
            </li>
            <li class="nav-item  my-2 {{ $currentStep != 2 ? '' : 'active' }}">
                <button class="btn nav-link tab2 col {{ $currentStep != 2 ? '' : 'active' }}" id=""
                    data-toggle="tab" href="#form02" role="tab" aria-controls=""
                    aria-selected="false">پاکستان میں فراہم کردہ سہولیات</button>
            </li>
            <li class="nav-item my-2 {{ $currentStep != 3 ? '' : 'active' }}">
                <button class="btn nav-link tab3 col {{ $currentStep != 3 ? '' : 'active' }}" id=""
                    data-toggle="tab" href="#form03" role="tab" aria-controls=""
                    aria-selected="false">ائیر لائن/سفری سہولیات</button>
            </li>
            <li class="nav-item my-2 {{ $currentStep != 4 ? '' : 'active' }}">
                <button class="btn nav-link tab4 col {{ $currentStep != 4 ? '' : 'active' }}" id=""
                    data-toggle="tab" href="#form04" role="tab" aria-controls="" aria-selected="false">مکہ
                    مکرمہ رہائش کے انتظامات</button>
            </li>
            <li class="nav-item my-2 {{ $currentStep != 5 ? '' : 'active' }}">
                <button class="btn nav-link tab5 col {{ $currentStep != 5 ? '' : 'active' }}" id=""
                    data-toggle="tab" href="#form05" role="tab" aria-controls="" aria-selected="false">مکہ
                    مکرمہ کھانے کے انتظامات</button>
            </li>
            <li class="nav-item my-2 {{ $currentStep != 6 ? '' : 'active' }}">
                <button class="btn nav-link tab6 col {{ $currentStep != 6 ? '' : 'active' }}" id=""
                    data-toggle="tab" href="#form06" role="tab" aria-controls="" aria-selected="false">مکہ
                    مکرمہ ٹرانسپورٹ کے انتظامات</button>
            </li>
            <li class="nav-item my-2 {{ $currentStep != 7 ? '' : 'active' }}">
                <button class="btn nav-link tab7 col {{ $currentStep != 7 ? '' : 'active' }}" id=""
                    data-toggle="tab" href="#form07" role="tab" aria-controls=""
                    aria-selected="false">مدینہ منورہ رہائش کے انتظامات</button>
            </li>
            <li class="nav-item my-2 {{ $currentStep != 8 ? '' : 'active' }}">
                <button class="btn nav-link tab8 col {{ $currentStep != 8 ? '' : 'active' }}" id=""
                    data-toggle="tab" href="#form08" role="tab" aria-controls=""
                    aria-selected="false">مدینہ منورہ کھانے کے انتظامات</button>
            </li>
            <li class="nav-item my-2 {{ $currentStep != 9 ? '' : 'active' }}">
                <button class="btn nav-link tab9 col {{ $currentStep != 9 ? '' : 'active' }}" id=""
                    data-toggle="tab" href="#form09" role="tab" aria-controls=""
                    aria-selected="false">مدینہ منورہ ٹرانسپورٹ کے
                    انتظامات</button>
            </li>
            <li class="nav-item my-2 {{ $currentStep != 10 ? '' : 'active' }}">
                <button class="btn nav-link tab10 col {{ $currentStep != 10 ? '' : 'active' }}" id=""
                    data-toggle="tab" href="#form10" role="tab" aria-controls=""
                    aria-selected="false">مدینہ منورہ دیگر سہولیات</button>
            </li>
            <li class="nav-item my-2 {{ $currentStep != 11 ? '' : 'active' }}">
                <button class="btn nav-link tab11 col {{ $currentStep != 11 ? '' : 'active' }}" id=""
                    data-toggle="tab" href="#form11" role="tab" aria-controls=""
                    aria-selected="false">مشائر میں سہولیات کا معیار</button>
            </li>
            <li class="nav-item my-2 {{ $currentStep != 12 ? '' : 'active' }}">
                <button class="btn nav-link tab12 col {{ $currentStep != 12 ? '' : 'active' }}" id=""
                    data-toggle="tab" href="#form12" role="tab" aria-controls="" aria-selected="false">طبی
                    انتظامات و سہولیات </button>
            </li>
            <li class="nav-item my-2 {{ $currentStep != 13 ? '' : 'active' }}">
                <button class="btn nav-link tab13 col {{ $currentStep != 13 ? '' : 'active' }}" id=""
                    data-toggle="tab" href="#form13" role="tab" aria-controls=""
                    aria-selected="false">پاکستان حج مشن</button>
            </li>
            <li class="nav-item my-2 {{ $currentStep != 14 ? '' : 'active' }}">
                <button class="btn nav-link tab14 col {{ $currentStep != 14 ? '' : 'active' }}" id=""
                    data-toggle="tab" href="#form14" role="tab" aria-controls=""
                    aria-selected="false">حجاج کے انتظامات پر عمومی تبصرہ
                </button>
            </li>
            <li class="nav-item my-2 {{ $currentStep != 15 ? '' : 'active' }}">
                <button class="btn nav-link tab15 col {{ $currentStep != 15 ? '' : 'active' }}" id=""
                    data-toggle="tab" href="#form15" role="tab" aria-controls="" aria-selected="false">حج
                    سروے فارم سمری</button>
            </li>
        </ul>
    </div>
    <!--sidebar-->
</div>
