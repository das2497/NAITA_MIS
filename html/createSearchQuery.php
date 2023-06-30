<?php

class CREATE_SEARCH_QUERY
{

    public static function query($sb, $sc, $su, $sf, $sm)
    {



        $query = "SELECT *
          FROM training_establishment
          INNER JOIN student ON training_establishment.tran_est_st_id = student.st_id
          INNER JOIN gender ON student.gender_gn_id = gender.gn_id
          INNER JOIN field ON student.field_fld_id = field.fld_id
          INNER JOIN degree ON field.fld_deg_id = degree.deg_id
          INNER JOIN university ON degree.deg_uni_id = university.uni_id
          INNER JOIN uni_type ON university.uni_type_uni_typ_id = uni_type.uni_typ_id
          INNER JOIN gov_status ON university.gov_status_govstat_id = gov_status.govstat_id
          INNER JOIN worksite ON training_establishment.worksite_wrksit_id = worksite.wrksit_id
          INNER JOIN training_place ON worksite.wrksit_tran_plc_id = training_place.tran_plc_id
          INNER JOIN periods ON training_establishment.tran_perion = periods.period_id
          INNER JOIN monitoring_status ON training_establishment.tran_monit_stat_id = monitoring_status.monit_stat_id";

        //// $x= "";
        //// $x.= "search : " . $sb;
        //// $x.= " company : " . $sc;
        //// $x.= " university : " . $su;
        //// $x.= " field : " . $sf;
        //// $x.= " monitoring : " . $sm . "......";
        //// $x.= "<br/>";
        //// $x.= "actve : ";

        switch ($sb) {
            case '':
                switch ($sc) {
                    case 'x':
                        switch ($su) {
                            case 'x':
                                switch ($sf) {
                                    case 'x':
                                        switch ($sm) {
                                            case 'x':
                                                // $x.= " nothing ";
                                                // $x.= " search : " . $sb;
                                                // $x.= " company : " . $sc;
                                                // $x.= " university : " . $su;
                                                // $x.= " field : " . $sf;
                                                // $x.= " monitoring : " . $sm;
                                                break;
                                            default:
                                                $query .= " WHERE monitoring_status.monit_stat_id = '" . $sm . "'";
                                                // $x.= " monitoring ";
                                                // $x.= " search : " . $sb;
                                                // $x.= " company : " . $sc;
                                                // $x.= " university : " . $su;
                                                // $x.= " field : " . $sf;
                                                // $x.= " monitoring : " . $sm;
                                                break;
                                        }
                                        break;
                                    default:
                                        $query .= " WHERE field.fld_id = '" . $sf . "'";
                                        switch ($sm) {
                                            case 'x':
                                                // $x.= " field ";
                                                // $x.= " search : " . $sb;
                                                // $x.= " company : " . $sc;
                                                // $x.= " university : " . $su;
                                                // $x.= " field : " . $sf;
                                                // $x.= " monitoring : " . $sm;
                                                break;
                                            default:
                                                $query .= " WHERE field.fld_id='" . $sf . "' AND monitoring_status.monit_stat_id='" . $sm . "'";
                                                // $x.= " field monitoring ";
                                                // $x.= " search : " . $sb;
                                                // $x.= " company : " . $sc;
                                                // $x.= " university : " . $su;
                                                // $x.= " field : " . $sf;
                                                // $x.= " monitoring : " . $sm;
                                                break;
                                        }
                                        break;
                                }
                                break;
                            default:
                                switch ($sf) {
                                    case 'x':
                                        switch ($sm) {
                                            case 'x':
                                                $query .= " WHERE university.uni_id='" . $su . "'";
                                                // $x.= " university ";
                                                // $x.= " search : " . $sb;
                                                // $x.= " company : " . $sc;
                                                // $x.= " university : " . $su;
                                                // $x.= " field : " . $sf;
                                                // $x.= " monitoring : " . $sm;
                                                break;
                                            default:
                                                $query .= " WHERE university.uni_id='" . $su . "' AND monitoring_status.monit_stat_id='" . $sm . "'";
                                                // $x.= " university monitoring ";
                                                // $x.= " search : " . $sb;
                                                // $x.= " company : " . $sc;
                                                // $x.= " university : " . $su;
                                                // $x.= " field : " . $sf;
                                                // $x.= " monitoring : " . $sm;
                                                break;
                                        }
                                        break;
                                    default:
                                        switch ($sm) {
                                            case 'x':
                                                $query .= " WHERE university.uni_id='" . $su . "' AND field.fld_id='" . $sf . "'";
                                                // $x.= " university field ";
                                                // $x.= " search : " . $sb;
                                                // $x.= " company : " . $sc;
                                                // $x.= " university : " . $su;
                                                // $x.= " field : " . $sf;
                                                // $x.= " monitoring : " . $sm;
                                                break;
                                            default:
                                                $query .= " WHERE university.uni_id='" . $su . "' AND field.fld_id='" . $sf . "' AND monitoring_status.monit_stat_id='" . $sm . "'";
                                                // $x.= " university field monitoring ";
                                                // $x.= " search : " . $sb;
                                                // $x.= " company : " . $sc;
                                                // $x.= " university : " . $su;
                                                // $x.= " field : " . $sf;
                                                // $x.= " monitoring : " . $sm;
                                                break;
                                        }
                                        break;
                                }
                                break;
                        }
                        break;
                    default:
                        switch ($su) {
                            case 'x':
                                switch ($sf) {
                                    case 'x':
                                        switch ($sm) {
                                            case 'x':
                                                $query .= " WHERE worksite.wrksit_id='" . $sc . "'";
                                                // $x.= " company ";
                                                // $x.= " search : " . $sb;
                                                // $x.= " company : " . $sc;
                                                // $x.= " university : " . $su;
                                                // $x.= " field : " . $sf;
                                                // $x.= " monitoring : " . $sm;
                                                break;
                                            default:
                                                $query .= " WHERE worksite.wrksit_id='" . $sc . "' AND monitoring_status.monit_stat_id='" . $sm . "'";
                                                // $x.= " company monitoring ";
                                                // $x.= " search : " . $sb;
                                                // $x.= " company : " . $sc;
                                                // $x.= " university : " . $su;
                                                // $x.= " field : " . $sf;
                                                // $x.= " monitoring : " . $sm;
                                                break;
                                        }
                                        break;
                                    default:
                                        switch ($sm) {
                                            case 'x':
                                                $query .= " WHERE worksite.wrksit_id='" . $sc . "' AND field.fld_id='" . $sf . "'";
                                                // $x.= " company field ";
                                                // $x.= " search : " . $sb;
                                                // $x.= " company : " . $sc;
                                                // $x.= " university : " . $su;
                                                // $x.= " field : " . $sf;
                                                // $x.= " monitoring : " . $sm;
                                                break;
                                            default:
                                                $query .= " WHERE worksite.wrksit_id='" . $sc . "' AND field.fld_id='" . $sf . "' AND monitoring_status.monit_stat_id='" . $sm . "'";
                                                // $x.= " company field monitoring ";
                                                // $x.= " search : " . $sb;
                                                // $x.= " company : " . $sc;
                                                // $x.= " university : " . $su;
                                                // $x.= " field : " . $sf;
                                                // $x.= " monitoring : " . $sm;
                                                break;
                                        }
                                        break;
                                }
                                break;
                            default:
                                switch ($sf) {
                                    case 'x':
                                        switch ($sm) {
                                            case 'x':
                                                $query .= " WHERE worksite.wrksit_id='" . $sc . "' AND university.uni_id='" . $su . "'";
                                                // $x.= " company university ";
                                                // $x.= " search : " . $sb;
                                                // $x.= " company : " . $sc;
                                                // $x.= " university : " . $su;
                                                // $x.= " field : " . $sf;
                                                // $x.= " monitoring : " . $sm;
                                                break;
                                            default:
                                                $query .= " WHERE worksite.wrksit_id='" . $sc . "' AND university.uni_id='" . $su . "' AND monitoring_status.monit_stat_id='" . $sm . "'";
                                                // $x.= " company university monitoring ";
                                                // $x.= " search : " . $sb;
                                                // $x.= " company : " . $sc;
                                                // $x.= " university : " . $su;
                                                // $x.= " field : " . $sf;
                                                // $x.= " monitoring : " . $sm;
                                                break;
                                        }
                                        break;
                                    default:
                                        switch ($sm) {
                                            case 'x':
                                                $query .= " WHERE worksite.wrksit_id='" . $sc . "' AND university.uni_id='" . $su . "' AND monitoring_status.monit_stat_id='" . $sm . "' AND field.fld_id='" . $sf . "'";
                                                // $x.= " company university field ";
                                                // $x.= " search : " . $sb;
                                                // $x.= " company : " . $sc;
                                                // $x.= " university : " . $su;
                                                // $x.= " field : " . $sf;
                                                // $x.= " monitoring : " . $sm;
                                                break;
                                            default:
                                                $query .= " WHERE worksite.wrksit_id='" . $sc . "' AND university.uni_id='" . $su . "' AND monitoring_status.monit_stat_id='" . $sm . "' AND field.fld_id='" . $sf . "' AND monitoring_status.monit_stat_id='" . $sm . "'";
                                                // $x.= " company university field monitoring ";
                                                // $x.= " search : " . $sb;
                                                // $x.= " company : " . $sc;
                                                // $x.= " university : " . $su;
                                                // $x.= " field : " . $sf;
                                                // $x.= " monitoring : " . $sm;
                                                break;
                                        }
                                        break;
                                }
                                break;
                        }
                        break;
                }
                break;
            default:
                switch ($sc) {
                    case 'x':
                        switch ($su) {
                            case 'x':
                                switch ($sf) {
                                    case 'x':
                                        switch ($sm) {
                                            case 'x':
                                                $query .= " WHERE 
                                        student.naita_id LIKE '%" . $sb . "%' OR 
                                        student.first_name LIKE '%" . $sb . "%' OR 
                                        student.last_name LIKE '%" . $sb . "%' OR 
                                        worksite.wrksit_name LIKE '%" . $sb . "%' OR 
                                        university.uni_name LIKE '%" . $sb . "%'";
                                                // $x.= " searchbar ";
                                                // $x.= " search : " . $sb;
                                                // $x.= " company : " . $sc;
                                                // $x.= " university : " . $su;
                                                // $x.= " field : " . $sf;
                                                // $x.= " monitoring : " . $sm;
                                                break;
                                            default:
                                                $query .= " WHERE 
                                                   (student.naita_id LIKE '%" . $sb . "%' AND monitoring_status.monit_stat_id='" . $sm . "') OR 
                                                   (student.first_name LIKE '%" . $sb . "%' AND monitoring_status.monit_stat_id='" . $sm . "') OR 
                                                   (student.last_name LIKE '%" . $sb . "%' AND monitoring_status.monit_stat_id='" . $sm . "') OR 
                                                   (worksite.wrksit_name  LIKE '%" . $sb . "%' AND monitoring_status.monit_stat_id='" . $sm . "') OR 
                                                   (university.uni_name LIKE '%" . $sb . "%' AND monitoring_status.monit_stat_id='" . $sm . "')";
                                                // $x.= " searchbar monitoring ";
                                                // $x.= " search : " . $sb;
                                                // $x.= " company : " . $sc;
                                                // $x.= " university : " . $su;
                                                // $x.= " field : " . $sf;
                                                // $x.= " monitoring : " . $sm;
                                                break;
                                        }
                                        break;
                                    default:
                                        switch ($sm) {
                                            case 'x':
                                                $query .= " WHERE 
                                        (student.naita_id LIKE '%" . $sb . "%' AND field.fld_id='" . $sf . "') OR 
                                        (student.first_name LIKE '%" . $sb . "%' AND field.fld_id='" . $sf . "') OR 
                                        (student.last_name LIKE '%" . $sb . "%' AND field.fld_id='" . $sf . "') OR 
                                        (worksite.wrksit_name  LIKE '%" . $sb . "%' AND field.fld_id='" . $sf . "') OR 
                                        (university.uni_name LIKE '%" . $sb . "%' AND field.fld_id='" . $sf . "')";
                                                // $x.= " searchbar field ";
                                                // $x.= " search : " . $sb;
                                                // $x.= " company : " . $sc;
                                                // $x.= " university : " . $su;
                                                // $x.= " field : " . $sf;
                                                // $x.= " monitoring : " . $sm;
                                                break;
                                            default:
                                                $query .= " WHERE 
                                    (student.naita_id LIKE '%" . $sb . "%' AND field.fld_id='" . $sf . "' AND monitoring_status.monit_stat_id='" . $sm . "') OR 
                                    (student.first_name LIKE '%" . $sb . "%' AND field.fld_id='" . $sf . "' AND monitoring_status.monit_stat_id='" . $sm . "') OR 
                                    (student.last_name LIKE '%" . $sb . "%' AND field.fld_id='" . $sf . "' AND monitoring_status.monit_stat_id='" . $sm . "') OR 
                                    (worksite.wrksit_name  LIKE '%" . $sb . "%' AND field.fld_id='" . $sf . "' AND monitoring_status.monit_stat_id='" . $sm . "') OR 
                                    (university.uni_name LIKE '%" . $sb . "%' AND field.fld_id='" . $sf . "' AND monitoring_status.monit_stat_id='" . $sm . "')";
                                                // $x.= " searchbar field monitoring ";
                                                // $x.= " search : " . $sb;
                                                // $x.= " company : " . $sc;
                                                // $x.= " university : " . $su;
                                                // $x.= " field : " . $sf;
                                                // $x.= " monitoring : " . $sm;
                                                break;
                                        }
                                        break;
                                }
                                break;
                            default:
                                switch ($sf) {
                                    case 'x':
                                        switch ($sm) {
                                            case 'x':
                                                $query .= " WHERE 
                                        (student.naita_id LIKE '%" . $sb . "%' AND university.uni_id='" . $su . "') OR 
                                        (student.first_name LIKE '%" . $sb . "%' AND university.uni_id='" . $su . "') OR 
                                        (student.last_name LIKE '%" . $sb . "%' AND university.uni_id='" . $su . "') OR 
                                        (worksite.wrksit_name  LIKE '%" . $sb . "%' AND university.uni_id='" . $su . "') OR 
                                        (university.uni_name LIKE '%" . $sb . "%' AND university.uni_id='" . $su . "')";
                                                // $x.= " searchbar university ";
                                                // $x.= " search : " . $sb;
                                                // $x.= " company : " . $sc;
                                                // $x.= " university : " . $su;
                                                // $x.= " field : " . $sf;
                                                // $x.= " monitoring : " . $sm;
                                                break;
                                            default:
                                                $query .= " WHERE 
                                    (student.naita_id LIKE '%" . $sb . "%' AND university.uni_id='" . $su . "' AND monitoring_status.monit_stat_id='" . $sm . "') OR 
                                    (student.first_name LIKE '%" . $sb . "%' AND university.uni_id='" . $su . "' AND monitoring_status.monit_stat_id='" . $sm . "') OR 
                                    (student.last_name LIKE '%" . $sb . "%' AND university.uni_id='" . $su . "' AND monitoring_status.monit_stat_id='" . $sm . "') OR 
                                    (worksite.wrksit_name  LIKE '%" . $sb . "%' AND university.uni_id='" . $su . "' AND monitoring_status.monit_stat_id='" . $sm . "') OR 
                                    (university.uni_name LIKE '%" . $sb . "%' AND university.uni_id='" . $su . "' AND monitoring_status.monit_stat_id='" . $sm . "')";
                                                // $x.= " searchbar university monitoring ";
                                                // $x.= " search : " . $sb;
                                                // $x.= " company : " . $sc;
                                                // $x.= " university : " . $su;
                                                // $x.= " field : " . $sf;
                                                // $x.= " monitoring : " . $sm;
                                                break;
                                        }
                                        break;
                                    default:
                                        switch ($sm) {
                                            case 'x':
                                                $query .= " WHERE 
                                        (student.naita_id LIKE '%" . $sb . "%' AND university.uni_id='" . $su . "' AND field.fld_id='" . $sf . "') OR 
                                        (student.first_name LIKE '%" . $sb . "%' AND university.uni_id='" . $su . "' AND field.fld_id='" . $sf . "') OR 
                                        (student.last_name LIKE '%" . $sb . "%' AND university.uni_id='" . $su . "' AND field.fld_id='" . $sf . "') OR 
                                        (worksite.wrksit_name  LIKE '%" . $sb . "%' AND university.uni_id='" . $su . "' AND field.fld_id='" . $sf . "') OR 
                                        (university.uni_name LIKE '%" . $sb . "%' AND university.uni_id='" . $su . "' AND field.fld_id='" . $sf . "')";
                                                // $x.= " searchbar university field ";
                                                // $x.= " search : " . $sb;
                                                // $x.= " company : " . $sc;
                                                // $x.= " university : " . $su;
                                                // $x.= " field : " . $sf;
                                                // $x.= " monitoring : " . $sm;
                                                break;
                                            default:
                                                $query .= " WHERE 
                                    (student.naita_id LIKE '%" . $sb . "%' AND university.uni_id='" . $su . "' AND field.fld_id='" . $sf . "' AND monitoring_status.monit_stat_id='" . $sm . "') OR 
                                    (student.first_name LIKE '%" . $sb . "%' AND university.uni_id='" . $su . "' AND field.fld_id='" . $sf . "' AND monitoring_status.monit_stat_id='" . $sm . "') OR 
                                    (student.last_name LIKE '%" . $sb . "%' AND university.uni_id='" . $su . "' AND field.fld_id='" . $sf . "' AND monitoring_status.monit_stat_id='" . $sm . "') OR 
                                    (worksite.wrksit_name  LIKE '%" . $sb . "%' AND university.uni_id='" . $su . "' AND field.fld_id='" . $sf . "' AND monitoring_status.monit_stat_id='" . $sm . "') OR 
                                    (university.uni_name LIKE '%" . $sb . "%' AND university.uni_id='" . $su . "' AND field.fld_id='" . $sf . "' AND monitoring_status.monit_stat_id='" . $sm . "')";
                                                // $x.= " searchbar university field monitoring ";
                                                // $x.= " search : " . $sb;
                                                // $x.= " company : " . $sc;
                                                // $x.= " university : " . $su;
                                                // $x.= " field : " . $sf;
                                                // $x.= " monitoring : " . $sm;
                                                break;
                                        }
                                        break;
                                }
                                break;
                        }
                        break;
                    default:
                        switch ($su) {
                            case 'x':
                                switch ($sf) {
                                    case 'x':
                                        switch ($sm) {
                                            case 'x':
                                                $query .= " WHERE 
                                        (student.naita_id LIKE '%" . $sb . "%' AND  worksite.wrksit_id='" . $sc . "') OR 
                                        (student.first_name LIKE '%" . $sb . "%' AND  worksite.wrksit_id='" . $sc . "') OR 
                                        (student.last_name LIKE '%" . $sb . "%' AND  worksite.wrksit_id='" . $sc . "') OR 
                                        (worksite.wrksit_name  LIKE '%" . $sb . "%' AND  worksite.wrksit_id='" . $sc . "') OR 
                                        (university.uni_name LIKE '%" . $sb . "%' AND  worksite.wrksit_id='" . $sc . "')";
                                                // $x.= " searchbar company ";
                                                // $x.= " search : " . $sb;
                                                // $x.= " company : " . $sc;
                                                // $x.= " university : " . $su;
                                                // $x.= " field : " . $sf;
                                                // $x.= " monitoring : " . $sm;
                                                break;
                                            default:
                                                $query .= " WHERE 
                                    (student.naita_id LIKE '%" . $sb . "%' AND  worksite.wrksit_id='" . $sc . "' AND monitoring_status.monit_stat_id='" . $sm . "') OR 
                                    (student.first_name LIKE '%" . $sb . "%' AND  worksite.wrksit_id='" . $sc . "' AND monitoring_status.monit_stat_id='" . $sm . "') OR 
                                    (student.last_name LIKE '%" . $sb . "%' AND  worksite.wrksit_id='" . $sc . "' AND monitoring_status.monit_stat_id='" . $sm . "') OR 
                                    (worksite.wrksit_name  LIKE '%" . $sb . "%' AND  worksite.wrksit_id='" . $sc . "' AND monitoring_status.monit_stat_id='" . $sm . "') OR 
                                    (university.uni_name LIKE '%" . $sb . "%' AND  worksite.wrksit_id='" . $sc . "' AND monitoring_status.monit_stat_id='" . $sm . "')";
                                                // $x.= " searchbar company monitoring ";
                                                // $x.= " search : " . $sb;
                                                // $x.= " company : " . $sc;
                                                // $x.= " university : " . $su;
                                                // $x.= " field : " . $sf;
                                                // $x.= " monitoring : " . $sm;
                                                break;
                                        }
                                        break;
                                    default:
                                        switch ($sm) {
                                            case 'x':
                                                $query .= " WHERE 
                                        (student.naita_id LIKE '%" . $sb . "%' AND  worksite.wrksit_id='" . $sc . "' AND field.fld_id='" . $sf . "') OR 
                                        (student.first_name LIKE '%" . $sb . "%' AND  worksite.wrksit_id='" . $sc . "' AND field.fld_id='" . $sf . "') OR 
                                        (student.last_name LIKE '%" . $sb . "%' AND  worksite.wrksit_id='" . $sc . "' AND field.fld_id='" . $sf . "') OR 
                                        (worksite.wrksit_name  LIKE '%" . $sb . "%' AND  worksite.wrksit_id='" . $sc . "' AND field.fld_id='" . $sf . "') OR 
                                        (university.uni_name LIKE '%" . $sb . "%' AND  worksite.wrksit_id='" . $sc . "' AND field.fld_id='" . $sf . "')";
                                                // $x.= " searchbar company field ";
                                                // $x.= " search : " . $sb;
                                                // $x.= " company : " . $sc;
                                                // $x.= " university : " . $su;
                                                // $x.= " field : " . $sf;
                                                // $x.= " monitoring : " . $sm;
                                                break;
                                            default:
                                                $query .= " WHERE 
                                    (student.naita_id LIKE '%" . $sb . "%' AND  worksite.wrksit_id='" . $sc . "' AND field.fld_id='" . $sf . "' AND monitoring_status.monit_stat_id='" . $sm . "') OR 
                                    (student.first_name LIKE '%" . $sb . "%' AND  worksite.wrksit_id='" . $sc . "' AND field.fld_id='" . $sf . "' AND monitoring_status.monit_stat_id='" . $sm . "') OR 
                                    (student.last_name LIKE '%" . $sb . "%' AND  worksite.wrksit_id='" . $sc . "' AND field.fld_id='" . $sf . "' AND monitoring_status.monit_stat_id='" . $sm . "') OR 
                                    (worksite.wrksit_name  LIKE '%" . $sb . "%' AND  worksite.wrksit_id='" . $sc . "' AND field.fld_id='" . $sf . "' AND monitoring_status.monit_stat_id='" . $sm . "') OR 
                                    (university.uni_name LIKE '%" . $sb . "%' AND  worksite.wrksit_id='" . $sc . "' AND field.fld_id='" . $sf . "' AND monitoring_status.monit_stat_id='" . $sm . "')";
                                                // $x.= " searchbar company field monitoring ";
                                                // $x.= " search : " . $sb;
                                                // $x.= " company : " . $sc;
                                                // $x.= " university : " . $su;
                                                // $x.= " field : " . $sf;
                                                // $x.= " monitoring : " . $sm;
                                                break;
                                        }
                                        break;
                                }
                                break;
                            default:
                                switch ($sf) {
                                    case 'x':
                                        switch ($sm) {
                                            case 'x':
                                                $query .= " WHERE 
                                        (student.naita_id LIKE '%" . $sb . "%' AND  worksite.wrksit_id='" . $sc . "' AND university.uni_id='" . $su . "') OR 
                                        (student.first_name LIKE '%" . $sb . "%' AND  worksite.wrksit_id='" . $sc . "' AND university.uni_id='" . $su . "') OR 
                                        (student.last_name LIKE '%" . $sb . "%' AND  worksite.wrksit_id='" . $sc . "' AND university.uni_id='" . $su . "') OR 
                                        (worksite.wrksit_name  LIKE '%" . $sb . "%' AND  worksite.wrksit_id='" . $sc . "' AND university.uni_id='" . $su . "') OR 
                                        (university.uni_name LIKE '%" . $sb . "%' AND  worksite.wrksit_id='" . $sc . "' AND university.uni_id='" . $su . "')";
                                                // $x.= " searchbar company university ";
                                                // $x.= " search : " . $sb;
                                                // $x.= " company : " . $sc;
                                                // $x.= " university : " . $su;
                                                // $x.= " field : " . $sf;
                                                // $x.= " monitoring : " . $sm;
                                                break;
                                            default:
                                                $query .= " WHERE 
                                    (student.naita_id LIKE '%" . $sb . "%' AND  worksite.wrksit_id='" . $sc . "' AND university.uni_id='" . $su . "' AND monitoring_status.monit_stat_id='" . $sm . "') OR 
                                    (student.first_name LIKE '%" . $sb . "%' AND  worksite.wrksit_id='" . $sc . "' AND university.uni_id='" . $su . "' AND monitoring_status.monit_stat_id='" . $sm . "') OR 
                                    (student.last_name LIKE '%" . $sb . "%' AND  worksite.wrksit_id='" . $sc . "' AND university.uni_id='" . $su . "' AND monitoring_status.monit_stat_id='" . $sm . "') OR 
                                    (worksite.wrksit_name  LIKE '%" . $sb . "%' AND  worksite.wrksit_id='" . $sc . "' AND university.uni_id='" . $su . "' AND monitoring_status.monit_stat_id='" . $sm . "') OR 
                                    (university.uni_name LIKE '%" . $sb . "%' AND  worksite.wrksit_id='" . $sc . "' AND university.uni_id='" . $su . "' AND monitoring_status.monit_stat_id='" . $sm . "')";
                                                // $x.= " searchbar company university monitoring ";
                                                // $x.= " search : " . $sb;
                                                // $x.= " company : " . $sc;
                                                // $x.= " university : " . $su;
                                                // $x.= " field : " . $sf;
                                                // $x.= " monitoring : " . $sm;
                                                break;
                                        }
                                        break;
                                    default:
                                        $query .= " ";
                                        switch ($sm) {
                                            case 'x':
                                                $query .= " WHERE 
                                        (student.naita_id LIKE '%" . $sb . "%' AND  worksite.wrksit_id='" . $sc . "' AND university.uni_id='" . $su . "'  AND field.fld_id='" . $sf . "') OR 
                                        (student.first_name LIKE '%" . $sb . "%' AND  worksite.wrksit_id='" . $sc . "' AND university.uni_id='" . $su . "'  AND field.fld_id='" . $sf . "') OR 
                                        (student.last_name LIKE '%" . $sb . "%' AND  worksite.wrksit_id='" . $sc . "' AND university.uni_id='" . $su . "'  AND field.fld_id='" . $sf . "') OR 
                                        (worksite.wrksit_name  LIKE '%" . $sb . "%' AND  worksite.wrksit_id='" . $sc . "' AND university.uni_id='" . $su . "'  AND field.fld_id='" . $sf . "') OR 
                                        (university.uni_name LIKE '%" . $sb . "%' AND  worksite.wrksit_id='" . $sc . "' AND university.uni_id='" . $su . "'  AND field.fld_id='" . $sf . "')";
                                                // $x.= " searchbar company university field ";
                                                // $x.= " search : " . $sb;
                                                // $x.= " company : " . $sc;
                                                // $x.= " university : " . $su;
                                                // $x.= " field : " . $sf;
                                                // $x.= " monitoring : " . $sm;
                                                break;
                                            default:
                                                $query .= " WHERE 
                                    (student.naita_id LIKE '%" . $sb . "%' AND  worksite.wrksit_id='" . $sc . "' AND university.uni_id='" . $su . "'  AND field.fld_id='" . $sf . "'  AND monitoring_status.monit_stat_id='" . $sm . "') OR 
                                    (student.first_name LIKE '%" . $sb . "%' AND  worksite.wrksit_id='" . $sc . "' AND university.uni_id='" . $su . "'  AND field.fld_id='" . $sf . "'  AND monitoring_status.monit_stat_id='" . $sm . "') OR 
                                    (student.last_name LIKE '%" . $sb . "%' AND  worksite.wrksit_id='" . $sc . "' AND university.uni_id='" . $su . "'  AND field.fld_id='" . $sf . "'  AND monitoring_status.monit_stat_id='" . $sm . "') OR 
                                    (worksite.wrksit_name  LIKE '%" . $sb . "%' AND  worksite.wrksit_id='" . $sc . "' AND university.uni_id='" . $su . "'  AND field.fld_id='" . $sf . "'  AND monitoring_status.monit_stat_id='" . $sm . "') OR 
                                    (university.uni_name LIKE '%" . $sb . "%' AND  worksite.wrksit_id='" . $sc . "' AND university.uni_id='" . $su . "'  AND field.fld_id='" . $sf . "'  AND monitoring_status.monit_stat_id='" . $sm . "')";
                                                // $x.= " searchbar company university field monitoring ";
                                                // $x.= " search : " . $sb;
                                                // $x.= " company : " . $sc;
                                                // $x.= " university : " . $su;
                                                // $x.= " field : " . $sf;
                                                // $x.= " monitoring : " . $sm;
                                                break;
                                        }
                                        break;
                                }
                                break;
                        }
                        break;
                }
                break;
        }

        // echo  $x;
        // echo "<br/>";
        // echo $query . ";";


        return $query;
    }
}
