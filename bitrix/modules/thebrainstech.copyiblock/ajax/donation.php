<?php

    $donationalerts = 'https://www.donationalerts.com/api/v1/alerts/donations';
    $token = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiI4MzAzIiwianRpIjoiY2MzOGM2YzZkNWRmZTBjNTNiMmQ0Yzc5NzM0MmNjZTU4ZTY1ODliOWZkMzJmYjhiMmM3NzIzNDQ2ZWJjN2Q1ZWY2MzEwYzA4ODUwYWM2NTQiLCJpYXQiOjE2MzU1ODI3OTIsIm5iZiI6MTYzNTU4Mjc5MiwiZXhwIjoyMjY2NzM0NzkyLCJzdWIiOiI2MTUwMDkzIiwic2NvcGVzIjpbIm9hdXRoLWRvbmF0aW9uLWluZGV4Il19.GsHIskaya1BBOPcTgCLHaHvIfYsfRXyWOleIiMLDHgdzdNfmMcWI_t77XkHGuXpkueGKkb-o3c7m_HenU-gResWL1Z1vMVV7ptDcb3xGclkhqjCKfPxoLcD7kMxMWxpl11YHZsUEHoSn7foObtHR9d__nfzNssKSEIJDXWF_GtWuZ-H14xHO1T10Gs5IzoVZ6pGq-fvXNG707NiaCXimlS3Cu-rOmsHn3wbxEzmGdWYJCd8IlYbjScmWkwuJ2KxNwFgeMu5suUUq2BANC0WDCKs9pWuNDHNVtvKY8gpDlqUYkqZOFov-f6eE2nkDe252pB_4bPSzxjf3HyzgzXxKmSMka-sBUwfxWu1Ij3Ctbx9eVdrRhmixERWmCRG1HKMEaPnz1MFqv_SBo6PcYZYrKMiy5w9bbMPXtm16SmlqCW8W3J7BO5mS3xLekGQNy5StAg8VpaBc_N1qHxe09h-CIV0zex4URm5IVpK-K6dBAImkRFa6SaCg4S4azY0CM5EotMNO-y2EmAGJNaVj3ml6wC6ACSMa8-eVL6VoKMoO4uCpdGbdZLz2FrW2paSAMn6hxKT79PfvtdF1gd8ZkIXtN70xx3P-QnpcRc4p_wMwwwK3f7KcCced_QpVqJTzEDiWfGWRpsk3RSKJ6MgAUSaBbrZQh7TFbiS3WGyHnpt8jlE';

    $ch = curl_init($donationalerts);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Authorization: Bearer ' . $token
    ));
    $output = curl_exec($ch);
    curl_close($ch);
    $donationalerts = json_decode($output);

    $table = '<table align=center border=1 cellpadding=10 cellspacing=0 style=width:100%>';

        if(!isset($donationalerts->message)){
            foreach($donationalerts->data as $data){
                $table .= '<tr>';
                    $table .= '<td>'. $data->username .'</td>';
                    $table .= '<td>'. $data->amount.$data->currency .'</td>';
                    $table .= '<td>'. $data->message .'</td>';
                $table .= '</tr>';
            }
        }else{
            $table .= '<tr>';
                $table .= '<td>'. $donationalerts->message .'</td>';
            $table .= '</tr>';
        }

    $table .= '</table>';

    print $table;
