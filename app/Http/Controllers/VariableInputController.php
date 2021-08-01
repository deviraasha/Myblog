<?php

namespace App\Http\Controllers;

use App\Models\Result;
use App\Models\Rule;
use Illuminate\Http\Request;

class VariableInputController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd(decrypt($_COOKIE['biodata_id']));

        //find biodata
        try {
            $cacheBio = $_COOKIE['biodata_id'];
        } catch (\Throwable $th) {
            return redirect('/biodata');
        }
        $idBio = decrypt($cacheBio);
        $data = Result::where('biodata_id', $idBio)->with('category.variable')->paginate(1);
        return view('fuzzy.testing', compact('data'));
    }

    public function checking(Request $request)
    {
        //find biodata
        try {
            $cacheBio = $_COOKIE['biodata_id'];
        } catch (\Throwable $th) {
            return redirect('/biodata');
        }
        $idBio = decrypt($cacheBio);

        // FUZZIFIKASI
        $v1 = $this->fuzzifikasiValue($request->v1);
        $v2 = $this->fuzzifikasiValue($request->v2);
        $v3 = $this->fuzzifikasiValue($request->v3);
        $v4 = $this->fuzzifikasiValue($request->v4);
        $v5 = $this->fuzzifikasiValue($request->v5);
        $vr1 = $this->fuzzifikasiName($request->v1);
        $vr2 = $this->fuzzifikasiName($request->v2);
        $vr3 = $this->fuzzifikasiName($request->v3);
        $vr4 = $this->fuzzifikasiName($request->v4);
        $vr5 = $this->fuzzifikasiName($request->v5);

        // $v1 = $this->fuzzifikasiValue(2);
        // $v2 = $this->fuzzifikasiValue(2);
        // $v3 = $this->fuzzifikasiValue(2);
        // $v4 = $this->fuzzifikasiValue(8);
        // $v5 = $this->fuzzifikasiValue(8);

        // $vr1 = $this->fuzzifikasiName(2);
        // $vr2 = $this->fuzzifikasiName(2);
        // $vr3 = $this->fuzzifikasiName(2);
        // $vr4 = $this->fuzzifikasiName(8);
        // $vr5 = $this->fuzzifikasiName(8);

        // Pengecekan Rule
        $rule = Rule::all();
        foreach ($rule as $key => $value) {
            foreach ($vr1 as $val1) {
                if ($value->v1 == $val1) {
                    foreach ($vr2 as $val2) {
                        if ($value->v1 == $val1 && $value->v2 == $val2) {
                            foreach ($vr3 as $val3) {
                                if ($value->v1 == $val1 && $value->v2 == $val2 && $value->v3 == $val3) {
                                    foreach ($vr4 as $val4) {
                                        if ($value->v1 == $val1 && $value->v2 == $val2 && $value->v3 == $val3 && $value->v4 == $val4) {
                                            foreach ($vr5 as $val5) {
                                                if ($value->v1 == $val1 && $value->v2 == $val2 && $value->v3 == $val3 && $value->v4 == $val4 && $value->v5 == $val5) {
                                                    $dataRule[] = $value->id;
                                                    // $min[]["value"] = $v1[$val1] . "," . $v2[$val2] . "," . $v3[$val3] . "," . $v4[$val4] . "," . $v5[$val5];
                                                    $min[$key + 1]["value"] = min($v1[$val1], $v2[$val2], $v3[$val3], $v4[$val4], $v5[$val5]);
                                                    $min[$key + 1]["aturan"] = $value->then;
                                                    // dd($min);
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        // dd(var_dump($min));
        // $dataRules = json_encode($dataRule);
        // dd(var_dump($dataRule));
        //--------------------------------------------------------------------------------------------------------
        // dd($min);
        // dd($this->integralM(10, 20, 0.5));
        // $cA = false;
        // $cB = false;
        // $cC = false;
        // foreach ($min as $val) {
        //     if ($val["aturan"] == "kurang cerdas") {
        //         // dd("kurang");
        //         $cA = true;

        //     }
        //     if ($val["aturan"] == "cukup cerdas") {
        //         // dd("cukup");
        //         $cB = true;
        //     }
        //     if ($val["aturan"] == "sangat cerdas") {
        //         // dd("sangat");
        //         $cC = true;
        //     }
        // }

        // //perhitungan kurang cerdas
        // if ($cA) {
        //     if ($cA && $cB) {
        //         dd("kurang & cukup **");
        //     } elseif ($cA && $cC) {
        //         dd("kurang & tinggi **");
        //     } else {
        //         dd("kurang");
        //     }
        // }
        // //perhitungan cukup cerdas
        // if ($cB) {
        //     if ($cB && $cA) {
        //         dd("cukup & kurang **");
        //     } elseif ($cB && $cC) {
        //         dd("cukup & tinggi **");
        //     } else {
        //         dd("cukup");
        //     }
        // }
        // //perhitungan sangat cerdas
        // if ($cC) {
        //     if ($cC && $cA) {
        //         dd("tinggi & kurang **");
        //     } elseif ($cC && $cB) {
        //         dd("tinggi & cukup **");
        //     } else {
        //         // dd("tinggi");
        //         // dd($min);
        //         $dMax = $this->cMinMax($min, "max");
        //         $dMin = $this->cMinMax($min, "min");
        //         $t1 = $this->cT(60, 40, $dMin);
        //         $t2 = $this->cT(60, 40, $dMax);

        //     }
        // }

        // dd("--");

        //--------------------------------------------------------------------------------------------------------
        foreach ($min as $val) {
            if ($val['aturan'] == "kurang cerdas") {
                $countDataA = array_count_values(array_column($min, 'aturan'))["kurang cerdas"];
                // dd($countData);
            }
            if ($val['aturan'] == "cukup cerdas") {
                $countDataB = array_count_values(array_column($min, 'aturan'))["cukup cerdas"];
                // dd($countData);
            }
            if ($val['aturan'] == "sangat cerdas") {
                $countDataC = array_count_values(array_column($min, 'aturan'))["sangat cerdas"];
                // dd($countData);
            }
        }

        if (empty($countDataA)) {
            $countDataA = 0;
        }
        if (empty($countDataB)) {
            $countDataB = 0;
        }
        if (empty($countDataC)) {
            $countDataC = 0;
        }
        if ($countDataA > $countDataB) {

            $ResultAkhir = "kurang cerdas";
        }
        if ($countDataB >= $countDataC && $countDataB >= $countDataA) {

            $ResultAkhir = "cukup cerdas";
        }
        if ($countDataC >= $countDataB && $countDataC >= $countDataA) {

            $ResultAkhir = "sangat cerdas";
        }
        // dd($ResultAkhir);
        Result::where('biodata_id', $idBio)->where('category_input_id', $request->category_input_id)
            ->update(['rule' => $dataRule,
                'v1' => $request->v1,
                'v2' => $request->v2,
                'v3' => $request->v3,
                'v4' => $request->v4,
                'v5' => $request->v5,
                'result' => $ResultAkhir,
            ]);

        $data = Result::where('biodata_id', $idBio)->with('category.variable')->paginate(1);
        // dd($request->page);
        if ($request->page <= $data->total()) {
            return redirect('/testing-fuzzy?page=' . $request->page);
        }
        if ($request->page > $data->total()) {
            return redirect('/result');
        }
    }

    // FUZZIFIKASI
    public function fuzzifikasiValue($x)
    {
        $data = [];
        //rendah
        if ($x <= 4) {
            $result = (4 - $x) / 4;
            if ($result > 0.0) {
                $data["rendah"] = $result;
            }
        }

        //sedang
        if ($x <= 5) {
            $result = ($x - 1) / 4;
            if ($result > 0.0) {
                $data["sedang"] = $result;
            }
        }
        //sedang
        if ($x > 5 && $x <= 9) {
            $result = (9 - $x) / 4;
            if ($result > 0.0) {
                $data["sedang"] = $result;
            }
        }

        //tinggi
        if ($x > 5 && $x <= 10 || $x > 10) {
            $result = ($x - 6) / 4;
            if ($result > 0.0) {
                $data["tinggi"] = $result;
            }
        }

        return $data;
    }
    // FUZZIFIKASI
    public function fuzzifikasiName($x)
    {
        $data = [];
        //rendah
        if ($x <= 4) {
            $result = (4 - $x) / 4;
            if ($result > 0.0) {
                $data[] = "rendah";
            }
        }

        //sedang
        if ($x <= 5) {
            $result = ($x - 1) / 4;
            if ($result > 0.0) {
                $data[] = "sedang";
            }
        }
        //sedang
        if ($x > 5 && $x <= 9) {
            $result = (9 - $x) / 4;
            if ($result > 0.0) {
                $data[] = "sedang";
            }
        }

        //tinggi
        if ($x > 5 && $x <= 10 || $x > 10) {
            $result = ($x - 6) / 4;
            if ($result > 0.0) {
                $data[] = "tinggi";
            }
        }

        return $data;
    }

    public function rules($x, $y)
    {
        $data = array();
        // INFERENSI
        $rule = Rule::all();
        foreach ($rule as $value) {
            foreach ($x as $val) {
                if (
                    $value->$y == $val
                ) {
                    $data[$value->id] = $value->id;
                }
            }
        }
        return $data;
    }
    public function integralM($a, $b, $c)
    {
        $x = $c / 2;
        $y = ($x) * ($a ** 2);
        $z = ($x) * ($b ** 2);
        $result = $z - $y;
        return $result;
    }
    public function integralA($a, $b, $c)
    {
        $x = ($c) * $a;
        $y = ($c) * $b;
        $result = $y - $x;
        return $result;
    }

    public function cMinMax($data, $stat)
    {
        foreach ($data as $item) {
            $minmax[] = $item["value"];
        }

        if ($stat == "min") {
            return min($minmax);
        }
        if ($stat == "max") {
            return max($minmax);
        }
    }

    public function cT($a, $b, $c)
    {
        $x = ($b * $c) + $a;

        return $x;
    }
}
