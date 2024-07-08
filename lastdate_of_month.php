<?php

$start_date = date("Y").'-'.date('m', $start).'-'.'01';
            $end_date_month_year = \Carbon\Carbon::parse($start_date)->endOfMonth();
            $end_date = \Carbon\Carbon::parse($end_date_month_year)->format('Y-m-d');
