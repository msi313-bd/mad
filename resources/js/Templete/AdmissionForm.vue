<template>
    <div class="bg-white px-6 py-4 print:py-0 print:px-4">
        <letter-head :photoFrame="true" />
        <h2 class="mt-4 mb-2 text-center text-2xl font-bold print:text-black">
            ভর্তির আবেদন ফরম
        </h2>
        <div class="grid gap-2">
            <div class="flex items-center justify-between gap-4">
                <div>
                    <inline-data
                        title="ফরম নাম্বার:"
                        :value="data.admission.id"
                    />
                </div>
                <div class="flex items-center justify-center gap-4">
                    <label class="flex items-center justify-center gap-2">
                        <check-uncheck-icon class="w-4" :isChecked="true" />
                        <span
                            :class="{
                                'font-semibold': true,
                            }"
                        >
                            নতুন
                        </span>
                    </label>
                    <label class="flex items-center justify-center gap-2">
                        <check-uncheck-icon class="w-4" />
                        <span
                            :class="{
                                'font-semibold': false,
                            }"
                        >
                            পুরাতন
                        </span>
                    </label>
                </div>
            </div>
            <div class="flex items-center justify-between gap-4">
                <div>
                    <inline-data
                        title="শিক্ষার্থীর নাম:"
                        :value="data.student.name"
                    />
                </div>
                <div>
                    <inline-data
                        title="জন্ম তারিখ:"
                        :value="data.student.dateOfBirthWithFormat"
                    />
                </div>
            </div>
            <div class="flex items-center justify-between gap-4">
                <div>
                    <inline-data
                        title="জন্ম নিবন্ধন নাম্বার:"
                        :value="data.student.birthCertificate"
                    />
                </div>
                <div class="flex items-center justify-center gap-4">
                    <div>
                        <inline-data
                            title="রক্তের গ্রুপ:"
                            :value="data.student.bloodGroupText"
                        />
                    </div>
                    <div class="flex items-center justify-center gap-4">
                        <div class="text-gray-700">লিঙ্গ:</div>
                        <label class="flex items-center justify-center gap-2">
                            <check-uncheck-icon
                                class="w-4"
                                :isChecked="data.student.gender == '1'"
                            />
                            <span
                                :class="{
                                    'font-semibold': data.student.gender == '1',
                                }"
                            >
                                ছেলে
                            </span>
                        </label>
                        <label class="flex items-center justify-center gap-2">
                            <check-uncheck-icon
                                class="w-4"
                                :isChecked="data.student.gender == '2'"
                            />
                            <span
                                :class="{
                                    'font-semibold': data.student.gender == '2',
                                }"
                            >
                                মেয়ে
                            </span>
                        </label>
                    </div>
                </div>
            </div>
            <hr />
            <div class="grid gap-4 print:grid-cols-4 md:grid-cols-4">
                <div class="print:col-span-2 md:col-span-2">
                    <inline-data
                        title="পিতার নাম:"
                        :value="data.student.fatherInfo.name"
                    />
                </div>
                <div>
                    <inline-data
                        title="ফোন:"
                        :value="data.student.fatherInfo.phone"
                    />
                </div>
                <div>
                    <inline-data
                        title="পেশা:"
                        :value="data.student.fatherInfo.occupation"
                    />
                </div>
            </div>
            <div class="grid gap-4 print:grid-cols-4 md:grid-cols-4">
                <div class="print:col-span-2 md:col-span-2">
                    <inline-data
                        title="মাতার নাম:"
                        :value="data.student.motherInfo.name"
                    />
                </div>
                <div>
                    <inline-data
                        title="ফোন:"
                        :value="data.student.motherInfo.phone"
                    />
                </div>
                <div>
                    <inline-data
                        title="পেশা:"
                        :value="data.student.motherInfo.occupation"
                    />
                </div>
            </div>
            <hr />
            <div class="flex items-center gap-4">
                <inline-data title="অভিভাবকের তথ্য" />
                <label class="flex items-center justify-center gap-2">
                    <check-uncheck-icon
                        class="w-4"
                        :isChecked="data.student.guardianType == '1'"
                    />
                    <span
                        :class="{
                            'font-semibold': data.student.guardianType == '1',
                        }"
                    >
                        পিতা
                    </span>
                </label>
                <label class="flex items-center justify-center gap-2">
                    <check-uncheck-icon
                        class="w-4"
                        :isChecked="data.student.guardianType == '2'"
                    />
                    <span
                        :class="{
                            'font-semibold': data.student.guardianType == '2',
                        }"
                    >
                        মাতা
                    </span>
                </label>
                <label class="flex items-center justify-center gap-2">
                    <check-uncheck-icon
                        class="w-4"
                        :isChecked="data.student.guardianType == '3'"
                    />
                    <span
                        :class="{
                            'font-semibold': data.student.guardianType == '3',
                        }"
                    >
                        বৈধ অভিভাবক
                    </span>
                </label>
            </div>
            <div class="grid gap-4 print:grid-cols-4 md:grid-cols-4">
                <div class="print:col-span-2 md:col-span-2">
                    <inline-data
                        title="অভিভাবকের নাম:"
                        :value="data.student.guardianInfo.name"
                    />
                </div>
                <div>
                    <inline-data
                        title="ফোন:"
                        :value="data.student.guardianInfo.phone"
                    />
                </div>
                <div>
                    <inline-data
                        title="সম্পর্ক:"
                        :value="data.student.guardianInfo.relation"
                    />
                </div>
            </div>
            <hr />
            <div class="font-semibold text-gray-700">বর্তমান ঠিকানা:</div>
            <div class="grid gap-4 print:grid-cols-3 md:grid-cols-3">
                <div class="print:col-span-2 md:col-span-2">
                    <inline-data
                        title="বাড়ি নং, রোড নং, গ্রাম/মহল্লা:"
                        :value="data.student.presentAddress.value"
                    />
                </div>
                <div>
                    <inline-data
                        title="পোস্ট অফিস:"
                        :value="data.student.presentAddress.postoffice"
                    />
                </div>
            </div>
            <div class="grid gap-4 print:grid-cols-3 md:grid-cols-3">
                <div>
                    <inline-data
                        title="উপজেলা:"
                        :value="data.student.presentAddress.areaName"
                    />
                </div>
                <div>
                    <inline-data
                        title="জেলা:"
                        :value="data.student.presentAddress.districtName"
                    />
                </div>
                <div>
                    <inline-data
                        title="বিভাগ:"
                        :value="data.student.presentAddress.divisionName"
                    />
                </div>
            </div>
            <div class="font-semibold text-gray-700">স্থায়ী ঠিকানা:</div>
            <div class="grid gap-4 print:grid-cols-3 md:grid-cols-3">
                <div class="print:col-span-2 md:col-span-2">
                    <inline-data
                        title="বাড়ি নং, রোড নং, গ্রাম/মহল্লা:"
                        :value="data.student.permanentAddress.value"
                    />
                </div>
                <div>
                    <inline-data
                        title="পোস্ট অফিস:"
                        :value="data.student.permanentAddress.postoffice"
                    />
                </div>
            </div>
            <div class="grid gap-4 print:grid-cols-3 md:grid-cols-3">
                <div>
                    <inline-data
                        title="উপজেলা:"
                        :value="data.student.permanentAddress.areaName"
                    />
                </div>
                <div>
                    <inline-data
                        title="জেলা:"
                        :value="data.student.permanentAddress.districtName"
                    />
                </div>
                <div>
                    <inline-data
                        title="বিভাগ:"
                        :value="data.student.permanentAddress.divisionName"
                    />
                </div>
            </div>
            <hr />
            <div class="grid gap-4">
                <div>
                    <inline-data
                        title="সর্বশেষ যে বিদ্যালয়ে পড়েছে তার নাম:"
                        :value="data.admission.previousSchool"
                    />
                </div>
            </div>
            <div class="flex justify-between gap-4">
                <div class="col-span-2">
                    <inline-data
                        title="শ্রেণী:"
                        :value="data.admission.previousClass"
                    />
                </div>
                <div>
                    <inline-data
                        title="রোল:"
                        :value="data.admission.previousRoll"
                    />
                </div>
                <div class="col-span-3">
                    <inline-data
                        title="সর্বশেষ পরীক্ষার অর্জিত ফলাফল:"
                        :value="data.admission.previousResult"
                    />
                </div>
            </div>
            <hr />
            <div class="grid gap-4">
                <div>
                    <inline-data
                        title="ভর্তিচ্ছু বিভাগ/শ্রেণী:"
                        :value="data.admission.className"
                    />
                </div>
                <div class="flex flex-wrap items-center gap-5">
                    <div class="text-gray-700">শিক্ষার্থীর ধরন:</div>
                    <label class="flex items-center justify-center gap-2">
                        <check-uncheck-icon
                            class="w-4"
                            :isChecked="data.student.resident == '1'"
                        />
                        <span
                            :class="{
                                'font-semibold': data.student.resident == '1',
                            }"
                        >
                            আবাসিক
                        </span>
                    </label>
                    <label class="flex items-center justify-center gap-2">
                        <check-uncheck-icon
                            class="w-4"
                            :isChecked="data.student.resident == '2'"
                        />
                        <span
                            :class="{
                                'font-semibold': data.student.resident == '2',
                            }"
                        >
                            অনাবাসিক
                        </span>
                    </label>
                    <label class="flex items-center justify-center gap-2">
                        <check-uncheck-icon
                            class="w-4"
                            :isChecked="data.student.resident == '3'"
                        />
                        <span
                            :class="{
                                'font-semibold': data.student.resident == '3',
                            }"
                        >
                            ডে-কেয়ার
                        </span>
                    </label>
                    <label class="flex items-center justify-center gap-2">
                        <check-uncheck-icon
                            class="w-4"
                            :isChecked="data.student.resident == '4'"
                        />
                        <span
                            :class="{
                                'font-semibold': data.student.resident == '4',
                            }"
                        >
                            সেমি-আবাসিক
                        </span>
                    </label>
                </div>
            </div>
            <hr />
            <h3
                class="mt-3 mb-2 text-center text-2xl font-bold print:mt-4 print:text-black"
            >
                দাপ্তরিক কার্যক্রম
            </h3>
            <div class="grid gap-4 print:grid-cols-5 md:grid-cols-5">
                <div class="col-span-3">
                    <inline-data
                        title="ভর্তি পরীক্ষার তারিখ (নতুন শিক্ষার্থীর জন্য):"
                    />
                </div>
                <div class="col-span-2 flex justify-end pr-2">
                    <inline-data
                        title="ভর্তি পরীক্ষার ফলাফল:"
                        :value="data.admission.admissionTestMark"
                    />
                </div>
            </div>
            <div class="grid gap-4 print:grid-cols-4 md:grid-cols-4">
                <div class="col-span-3">
                    <inline-data
                        title="বার্ষিক পরীক্ষার ফলাফল (পুরাতন শিক্ষার্থীর জন্য):"
                    />
                </div>
            </div>
            <div class="grid gap-4 print:grid-cols-4 md:grid-cols-4">
                <div class="col-span-3">
                    <inline-data title="পরীক্ষকের মন্তব্য:" />
                </div>
            </div>
            <div class="flex items-center justify-between gap-4">
                <div>
                    <inline-data
                        title="পরীক্ষক:"
                        :value="data.admission.class.teacherName"
                    />
                </div>
                <div>
                    <inline-data title="পরীক্ষকের স্বাক্ষর" />
                </div>
            </div>
            <hr class="print:hidden" />
            <h3
                class="mt-3 text-center text-2xl font-bold print:mt-28 print:text-black"
            >
                শিক্ষার্থীর অঙ্গীকার
            </h3>
            <div>
                আমি <b>{{ data.admission.studentName }}</b> অত্র মাদরাসায় ভর্তি
                হতে ইচ্ছুক। আমি মনে প্রাণে অঙ্গীকার করছি যে,
            </div>
            <div class="whitespace-pre-wrap text-justify">
                {{ $page.props.settings.studentAgreement }}
            </div>
            <br />
            <br />
            <div class="flex items-center justify-between gap-4">
                <div>
                    <inline-data
                        title="আবেদনের তারিখ:"
                        :value="$e2bnumber(data.admission.dateOfApplication)"
                    />
                </div>
                <div>
                    <inline-data title="আবেদনকারীর স্বাক্ষর" />
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import LetterHead from "@/Templete/LetterHead.vue";
import Input from "@/Components/Input.vue";
import InlineData from "@/Components/InlineData.vue";
import CheckUncheckIcon from "@/Components/CheckUncheckIcon.vue";
export default {
    components: {
        LetterHead,
        Input,
        InlineData,
        CheckUncheckIcon,
    },
    props: {
        data: {
            type: Object,
            default: {},
        },
    },
};
</script>
