<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/css/64dd8c5')) {
            // _assetic_64dd8c5
            if ($pathinfo === '/css/64dd8c5.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_64dd8c5',);
            }

            if (0 === strpos($pathinfo, '/css/64dd8c5_part_1_')) {
                // _assetic_64dd8c5_0
                if ($pathinfo === '/css/64dd8c5_part_1_buttons_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_0',);
                }

                // _assetic_64dd8c5_1
                if ($pathinfo === '/css/64dd8c5_part_1_general_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_1',);
                }

                // _assetic_64dd8c5_2
                if ($pathinfo === '/css/64dd8c5_part_1_content-creation_3.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_2',);
                }

                // _assetic_64dd8c5_3
                if ($pathinfo === '/css/64dd8c5_part_1_discovery-create_4.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_3',);
                }

                if (0 === strpos($pathinfo, '/css/64dd8c5_part_1_c')) {
                    // _assetic_64dd8c5_4
                    if ($pathinfo === '/css/64dd8c5_part_1_content-type_5.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_4',);
                    }

                    if (0 === strpos($pathinfo, '/css/64dd8c5_part_1_create-content-')) {
                        // _assetic_64dd8c5_5
                        if ($pathinfo === '/css/64dd8c5_part_1_create-content-button_6.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 5,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_5',);
                        }

                        // _assetic_64dd8c5_6
                        if ($pathinfo === '/css/64dd8c5_part_1_create-content-popup_7.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 6,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_6',);
                        }

                    }

                    // _assetic_64dd8c5_7
                    if ($pathinfo === '/css/64dd8c5_part_1_content-creation_8.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 7,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_7',);
                    }

                }

                // _assetic_64dd8c5_8
                if ($pathinfo === '/css/64dd8c5_part_1_discovery-create_9.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 8,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_8',);
                }

                if (0 === strpos($pathinfo, '/css/64dd8c5_part_1_c')) {
                    // _assetic_64dd8c5_9
                    if ($pathinfo === '/css/64dd8c5_part_1_content-type_10.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 9,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_9',);
                    }

                    // _assetic_64dd8c5_10
                    if ($pathinfo === '/css/64dd8c5_part_1_create-content-popup_11.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 10,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_10',);
                    }

                }

                // _assetic_64dd8c5_11
                if ($pathinfo === '/css/64dd8c5_part_1_base-context-min_12.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 11,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_11',);
                }

                // _assetic_64dd8c5_12
                if ($pathinfo === '/css/64dd8c5_part_1_grids-min_13.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 12,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_12',);
                }

                // _assetic_64dd8c5_13
                if ($pathinfo === '/css/64dd8c5_part_1_buttons-min_14.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 13,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_13',);
                }

                // _assetic_64dd8c5_14
                if ($pathinfo === '/css/64dd8c5_part_1_tables-min_15.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 14,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_14',);
                }

                if (0 === strpos($pathinfo, '/css/64dd8c5_part_1_f')) {
                    // _assetic_64dd8c5_15
                    if ($pathinfo === '/css/64dd8c5_part_1_forms-min_16.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 15,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_15',);
                    }

                    // _assetic_64dd8c5_16
                    if ($pathinfo === '/css/64dd8c5_part_1_flag-icon.min_17.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 16,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_16',);
                    }

                }

                // _assetic_64dd8c5_17
                if ($pathinfo === '/css/64dd8c5_part_1_alloy-editor-ez_18.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 17,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_17',);
                }

                // _assetic_64dd8c5_18
                if ($pathinfo === '/css/64dd8c5_part_1_layout_19.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 18,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_18',);
                }

                // _assetic_64dd8c5_19
                if ($pathinfo === '/css/64dd8c5_part_1_navigationhub_20.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 19,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_19',);
                }

                if (0 === strpos($pathinfo, '/css/64dd8c5_part_1_con')) {
                    // _assetic_64dd8c5_20
                    if ($pathinfo === '/css/64dd8c5_part_1_contentpeek_21.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 20,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_20',);
                    }

                    // _assetic_64dd8c5_21
                    if ($pathinfo === '/css/64dd8c5_part_1_confirmbox_22.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 21,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_21',);
                    }

                }

                // _assetic_64dd8c5_22
                if ($pathinfo === '/css/64dd8c5_part_1_languageselectionbox_23.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 22,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_22',);
                }

                if (0 === strpos($pathinfo, '/css/64dd8c5_part_1_notification')) {
                    // _assetic_64dd8c5_23
                    if ($pathinfo === '/css/64dd8c5_part_1_notificationhub_24.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 23,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_23',);
                    }

                    // _assetic_64dd8c5_24
                    if ($pathinfo === '/css/64dd8c5_part_1_notification_25.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 24,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_24',);
                    }

                }

                // _assetic_64dd8c5_25
                if ($pathinfo === '/css/64dd8c5_part_1_universaldiscovery_26.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 25,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_25',);
                }

                // _assetic_64dd8c5_26
                if ($pathinfo === '/css/64dd8c5_part_1_browse_27.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 26,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_26',);
                }

                if (0 === strpos($pathinfo, '/css/64dd8c5_part_1_se')) {
                    // _assetic_64dd8c5_27
                    if ($pathinfo === '/css/64dd8c5_part_1_search_28.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 27,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_27',);
                    }

                    // _assetic_64dd8c5_28
                    if ($pathinfo === '/css/64dd8c5_part_1_selected_29.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 28,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_28',);
                    }

                }

                // _assetic_64dd8c5_29
                if ($pathinfo === '/css/64dd8c5_part_1_finder_30.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 29,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_29',);
                }

                if (0 === strpos($pathinfo, '/css/64dd8c5_part_1_explorer')) {
                    // _assetic_64dd8c5_30
                    if ($pathinfo === '/css/64dd8c5_part_1_explorer_31.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 30,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_30',);
                    }

                    // _assetic_64dd8c5_31
                    if ($pathinfo === '/css/64dd8c5_part_1_explorerlevel_32.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 31,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_31',);
                    }

                }

                // _assetic_64dd8c5_32
                if ($pathinfo === '/css/64dd8c5_part_1_confirmedlist_33.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 32,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_32',);
                }

                // _assetic_64dd8c5_33
                if ($pathinfo === '/css/64dd8c5_part_1_tree_34.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 33,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_33',);
                }

                // _assetic_64dd8c5_34
                if ($pathinfo === '/css/64dd8c5_part_1_loginform_35.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 34,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_34',);
                }

                // _assetic_64dd8c5_35
                if ($pathinfo === '/css/64dd8c5_part_1_contentedit_36.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 35,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_35',);
                }

                // _assetic_64dd8c5_36
                if ($pathinfo === '/css/64dd8c5_part_1_locationview_37.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 36,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_36',);
                }

                // _assetic_64dd8c5_37
                if ($pathinfo === '/css/64dd8c5_part_1_trash_38.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 37,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_37',);
                }

                if (0 === strpos($pathinfo, '/css/64dd8c5_part_1_s')) {
                    if (0 === strpos($pathinfo, '/css/64dd8c5_part_1_search')) {
                        // _assetic_64dd8c5_38
                        if ($pathinfo === '/css/64dd8c5_part_1_search_39.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 38,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_38',);
                        }

                        // _assetic_64dd8c5_39
                        if ($pathinfo === '/css/64dd8c5_part_1_searchlist_40.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 39,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_39',);
                        }

                    }

                    // _assetic_64dd8c5_40
                    if ($pathinfo === '/css/64dd8c5_part_1_subitembox_41.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 40,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_40',);
                    }

                }

                if (0 === strpos($pathinfo, '/css/64dd8c5_part_1_list')) {
                    // _assetic_64dd8c5_41
                    if ($pathinfo === '/css/64dd8c5_part_1_listmore_42.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 41,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_41',);
                    }

                    // _assetic_64dd8c5_42
                    if ($pathinfo === '/css/64dd8c5_part_1_listitem_43.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 42,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_42',);
                    }

                }

                if (0 === strpos($pathinfo, '/css/64dd8c5_part_1_grid')) {
                    // _assetic_64dd8c5_43
                    if ($pathinfo === '/css/64dd8c5_part_1_grid_44.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 43,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_43',);
                    }

                    // _assetic_64dd8c5_44
                    if ($pathinfo === '/css/64dd8c5_part_1_griditem_45.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 44,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_44',);
                    }

                }

                // _assetic_64dd8c5_45
                if ($pathinfo === '/css/64dd8c5_part_1_rawcontent_46.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 45,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_45',);
                }

                // _assetic_64dd8c5_46
                if ($pathinfo === '/css/64dd8c5_part_1_languageswitcher_47.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 46,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_46',);
                }

                // _assetic_64dd8c5_47
                if ($pathinfo === '/css/64dd8c5_part_1_details_48.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 47,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_47',);
                }

                // _assetic_64dd8c5_48
                if ($pathinfo === '/css/64dd8c5_part_1_relations_49.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 48,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_48',);
                }

                // _assetic_64dd8c5_49
                if ($pathinfo === '/css/64dd8c5_part_1_locations_50.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 49,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_49',);
                }

                // _assetic_64dd8c5_50
                if ($pathinfo === '/css/64dd8c5_part_1_versions_51.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 50,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_50',);
                }

                // _assetic_64dd8c5_51
                if ($pathinfo === '/css/64dd8c5_part_1_field_52.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 51,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_51',);
                }

                // _assetic_64dd8c5_52
                if ($pathinfo === '/css/64dd8c5_part_1_user_53.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 52,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_52',);
                }

                // _assetic_64dd8c5_53
                if ($pathinfo === '/css/64dd8c5_part_1_author_54.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 53,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_53',);
                }

                // _assetic_64dd8c5_54
                if ($pathinfo === '/css/64dd8c5_part_1_maplocation_55.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 54,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_54',);
                }

                // _assetic_64dd8c5_55
                if ($pathinfo === '/css/64dd8c5_part_1_selection_56.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 55,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_55',);
                }

                // _assetic_64dd8c5_56
                if ($pathinfo === '/css/64dd8c5_part_1_keyword_57.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 56,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_56',);
                }

                // _assetic_64dd8c5_57
                if ($pathinfo === '/css/64dd8c5_part_1_country_58.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 57,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_57',);
                }

                // _assetic_64dd8c5_58
                if ($pathinfo === '/css/64dd8c5_part_1_media_59.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 58,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_58',);
                }

                if (0 === strpos($pathinfo, '/css/64dd8c5_part_1_r')) {
                    // _assetic_64dd8c5_59
                    if ($pathinfo === '/css/64dd8c5_part_1_richtext_60.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 59,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_59',);
                    }

                    // _assetic_64dd8c5_60
                    if ($pathinfo === '/css/64dd8c5_part_1_relationlist_61.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 60,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_60',);
                    }

                }

                // _assetic_64dd8c5_61
                if ($pathinfo === '/css/64dd8c5_part_1_contenteditform_62.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 61,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_61',);
                }

                // _assetic_64dd8c5_62
                if ($pathinfo === '/css/64dd8c5_part_1_bar_63.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 62,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_62',);
                }

                // _assetic_64dd8c5_63
                if ($pathinfo === '/css/64dd8c5_part_1_discoverybar_64.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 63,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_63',);
                }

                // _assetic_64dd8c5_64
                if ($pathinfo === '/css/64dd8c5_part_1_contenttypeselector_65.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 64,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_64',);
                }

                // _assetic_64dd8c5_65
                if ($pathinfo === '/css/64dd8c5_part_1_tree_66.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 65,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_65',);
                }

                // _assetic_64dd8c5_66
                if ($pathinfo === '/css/64dd8c5_part_1_button_67.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 66,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_66',);
                }

                // _assetic_64dd8c5_67
                if ($pathinfo === '/css/64dd8c5_part_1_preview_68.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 67,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_67',);
                }

                // _assetic_64dd8c5_68
                if ($pathinfo === '/css/64dd8c5_part_1_create-content_69.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 68,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_68',);
                }

                // _assetic_64dd8c5_69
                if ($pathinfo === '/css/64dd8c5_part_1_translate_70.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 69,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_69',);
                }

                // _assetic_64dd8c5_70
                if ($pathinfo === '/css/64dd8c5_part_1_editpreview_71.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 70,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_70',);
                }

                // _assetic_64dd8c5_71
                if ($pathinfo === '/css/64dd8c5_part_1_fieldedit_72.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 71,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_71',);
                }

                // _assetic_64dd8c5_72
                if ($pathinfo === '/css/64dd8c5_part_1_error_73.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 72,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_72',);
                }

                // _assetic_64dd8c5_73
                if ($pathinfo === '/css/64dd8c5_part_1_asynchronous_74.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 73,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_73',);
                }

                if (0 === strpos($pathinfo, '/css/64dd8c5_part_1_dashboard')) {
                    // _assetic_64dd8c5_74
                    if ($pathinfo === '/css/64dd8c5_part_1_dashboard_75.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 74,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_74',);
                    }

                    // _assetic_64dd8c5_75
                    if ($pathinfo === '/css/64dd8c5_part_1_dashboard-blocks_76.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 75,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_75',);
                    }

                }

                if (0 === strpos($pathinfo, '/css/64dd8c5_part_1_studiop')) {
                    // _assetic_64dd8c5_76
                    if ($pathinfo === '/css/64dd8c5_part_1_studiopresentation_77.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 76,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_76',);
                    }

                    // _assetic_64dd8c5_77
                    if ($pathinfo === '/css/64dd8c5_part_1_studiopluspresentation_78.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 77,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_77',);
                    }

                }

                if (0 === strpos($pathinfo, '/css/64dd8c5_part_1_user')) {
                    // _assetic_64dd8c5_78
                    if ($pathinfo === '/css/64dd8c5_part_1_userprofile_79.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 78,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_78',);
                    }

                    // _assetic_64dd8c5_79
                    if ($pathinfo === '/css/64dd8c5_part_1_usermenu_80.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 79,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_79',);
                    }

                }

                // _assetic_64dd8c5_80
                if ($pathinfo === '/css/64dd8c5_part_1_serverside_81.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 80,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_80',);
                }

                // _assetic_64dd8c5_81
                if ($pathinfo === '/css/64dd8c5_part_1_draftconflict_82.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 81,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_81',);
                }

                if (0 === strpos($pathinfo, '/css/64dd8c5_part_1_c')) {
                    // _assetic_64dd8c5_82
                    if ($pathinfo === '/css/64dd8c5_part_1_checkbox_83.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 82,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_82',);
                    }

                    // _assetic_64dd8c5_83
                    if ($pathinfo === '/css/64dd8c5_part_1_country_84.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 83,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_83',);
                    }

                }

                // _assetic_64dd8c5_84
                if ($pathinfo === '/css/64dd8c5_part_1_textline_85.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 84,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_84',);
                }

                // _assetic_64dd8c5_85
                if ($pathinfo === '/css/64dd8c5_part_1_keyword_86.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 85,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_85',);
                }

                // _assetic_64dd8c5_86
                if ($pathinfo === '/css/64dd8c5_part_1_textblock_87.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 86,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_86',);
                }

                // _assetic_64dd8c5_87
                if ($pathinfo === '/css/64dd8c5_part_1_xmltext_88.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 87,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_87',);
                }

                // _assetic_64dd8c5_88
                if ($pathinfo === '/css/64dd8c5_part_1_emailaddress_89.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 88,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_88',);
                }

                // _assetic_64dd8c5_89
                if ($pathinfo === '/css/64dd8c5_part_1_url_90.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 89,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_89',);
                }

                // _assetic_64dd8c5_90
                if ($pathinfo === '/css/64dd8c5_part_1_float_91.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 90,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_90',);
                }

                // _assetic_64dd8c5_91
                if ($pathinfo === '/css/64dd8c5_part_1_integer_92.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 91,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_91',);
                }

                // _assetic_64dd8c5_92
                if ($pathinfo === '/css/64dd8c5_part_1_maplocation_93.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 92,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_92',);
                }

                // _assetic_64dd8c5_93
                if ($pathinfo === '/css/64dd8c5_part_1_author_94.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 93,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_93',);
                }

                // _assetic_64dd8c5_94
                if ($pathinfo === '/css/64dd8c5_part_1_binarybase_95.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 94,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_94',);
                }

                // _assetic_64dd8c5_95
                if ($pathinfo === '/css/64dd8c5_part_1_image_96.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 95,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_95',);
                }

                // _assetic_64dd8c5_96
                if ($pathinfo === '/css/64dd8c5_part_1_media_97.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 96,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_96',);
                }

                // _assetic_64dd8c5_97
                if ($pathinfo === '/css/64dd8c5_part_1_binaryfile_98.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 97,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_97',);
                }

                // _assetic_64dd8c5_98
                if ($pathinfo === '/css/64dd8c5_part_1_selection_99.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 98,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_98',);
                }

                // _assetic_64dd8c5_99
                if ($pathinfo === '/css/64dd8c5_part_1_time_100.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 99,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_99',);
                }

                if (0 === strpos($pathinfo, '/css/64dd8c5_part_1_date')) {
                    // _assetic_64dd8c5_100
                    if ($pathinfo === '/css/64dd8c5_part_1_date_101.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 100,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_100',);
                    }

                    // _assetic_64dd8c5_101
                    if ($pathinfo === '/css/64dd8c5_part_1_dateandtime_102.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 101,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_101',);
                    }

                }

                if (0 === strpos($pathinfo, '/css/64dd8c5_part_1_r')) {
                    if (0 === strpos($pathinfo, '/css/64dd8c5_part_1_relation')) {
                        // _assetic_64dd8c5_102
                        if ($pathinfo === '/css/64dd8c5_part_1_relation_103.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 102,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_102',);
                        }

                        // _assetic_64dd8c5_103
                        if ($pathinfo === '/css/64dd8c5_part_1_relationlist_104.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 103,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_103',);
                        }

                    }

                    // _assetic_64dd8c5_104
                    if ($pathinfo === '/css/64dd8c5_part_1_richtext_105.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 104,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_104',);
                    }

                }

                // _assetic_64dd8c5_105
                if ($pathinfo === '/css/64dd8c5_part_1_isbn_106.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 105,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_105',);
                }

                // _assetic_64dd8c5_106
                if ($pathinfo === '/css/64dd8c5_part_1_user_107.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 106,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_106',);
                }

                // _assetic_64dd8c5_107
                if ($pathinfo === '/css/64dd8c5_part_1_base_108.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 107,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_107',);
                }

                // _assetic_64dd8c5_108
                if ($pathinfo === '/css/64dd8c5_part_1_asynchronous_109.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 108,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_108',);
                }

                // _assetic_64dd8c5_109
                if ($pathinfo === '/css/64dd8c5_part_1_contenttypeedit_110.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 109,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_109',);
                }

                // _assetic_64dd8c5_110
                if ($pathinfo === '/css/64dd8c5_part_1_tabs_111.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 110,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_110',);
                }

                // _assetic_64dd8c5_111
                if ($pathinfo === '/css/64dd8c5_part_1_page-header_112.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 111,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_111',);
                }

                if (0 === strpos($pathinfo, '/css/64dd8c5_part_1_se')) {
                    // _assetic_64dd8c5_112
                    if ($pathinfo === '/css/64dd8c5_part_1_serverside-content_113.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 112,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_112',);
                    }

                    // _assetic_64dd8c5_113
                    if ($pathinfo === '/css/64dd8c5_part_1_selection-filter_114.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 113,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_113',);
                    }

                }

                // _assetic_64dd8c5_114
                if ($pathinfo === '/css/64dd8c5_part_1_button_115.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 114,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_114',);
                }

                // _assetic_64dd8c5_115
                if ($pathinfo === '/css/64dd8c5_part_1_table-data_116.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 115,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_115',);
                }

                // _assetic_64dd8c5_116
                if ($pathinfo === '/css/64dd8c5_part_1_breadcrumbs_117.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 116,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_116',);
                }

                // _assetic_64dd8c5_117
                if ($pathinfo === '/css/64dd8c5_part_1_yui-calendar_118.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 117,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_117',);
                }

                // _assetic_64dd8c5_118
                if ($pathinfo === '/css/64dd8c5_part_1_pure-grid_119.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 118,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_118',);
                }

                // _assetic_64dd8c5_119
                if ($pathinfo === '/css/64dd8c5_part_1_embed_120.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 119,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_119',);
                }

                // _assetic_64dd8c5_120
                if ($pathinfo === '/css/64dd8c5_part_1_richtext_121.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 120,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_120',);
                }

                // _assetic_64dd8c5_121
                if ($pathinfo === '/css/64dd8c5_part_1_loadmorepagination_122.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 121,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_121',);
                }

                // _assetic_64dd8c5_122
                if ($pathinfo === '/css/64dd8c5_part_1_general_123.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 122,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_122',);
                }

                if (0 === strpos($pathinfo, '/css/64dd8c5_part_1_l')) {
                    // _assetic_64dd8c5_123
                    if ($pathinfo === '/css/64dd8c5_part_1_labeled-button_124.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 123,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_123',);
                    }

                    // _assetic_64dd8c5_124
                    if ($pathinfo === '/css/64dd8c5_part_1_linkedit_125.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 124,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_124',);
                    }

                }

                // _assetic_64dd8c5_125
                if ($pathinfo === '/css/64dd8c5_part_1_app_126.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 125,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_125',);
                }

                // _assetic_64dd8c5_126
                if ($pathinfo === '/css/64dd8c5_part_1_error_127.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 126,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_126',);
                }

                // _assetic_64dd8c5_127
                if ($pathinfo === '/css/64dd8c5_part_1_loginform_128.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 127,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_127',);
                }

                // _assetic_64dd8c5_128
                if ($pathinfo === '/css/64dd8c5_part_1_bar_129.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 128,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_128',);
                }

                if (0 === strpos($pathinfo, '/css/64dd8c5_part_1_con')) {
                    // _assetic_64dd8c5_129
                    if ($pathinfo === '/css/64dd8c5_part_1_contentpeek_130.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 129,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_129',);
                    }

                    // _assetic_64dd8c5_130
                    if ($pathinfo === '/css/64dd8c5_part_1_confirmbox_131.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 130,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_130',);
                    }

                }

                // _assetic_64dd8c5_131
                if ($pathinfo === '/css/64dd8c5_part_1_languageselectionbox_132.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 131,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_131',);
                }

                if (0 === strpos($pathinfo, '/css/64dd8c5_part_1_notification')) {
                    // _assetic_64dd8c5_132
                    if ($pathinfo === '/css/64dd8c5_part_1_notificationhub_133.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 132,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_132',);
                    }

                    // _assetic_64dd8c5_133
                    if ($pathinfo === '/css/64dd8c5_part_1_notification_134.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 133,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_133',);
                    }

                }

                // _assetic_64dd8c5_134
                if ($pathinfo === '/css/64dd8c5_part_1_universaldiscovery_135.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 134,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_134',);
                }

                // _assetic_64dd8c5_135
                if ($pathinfo === '/css/64dd8c5_part_1_browse_136.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 135,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_135',);
                }

                if (0 === strpos($pathinfo, '/css/64dd8c5_part_1_se')) {
                    // _assetic_64dd8c5_136
                    if ($pathinfo === '/css/64dd8c5_part_1_search_137.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 136,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_136',);
                    }

                    // _assetic_64dd8c5_137
                    if ($pathinfo === '/css/64dd8c5_part_1_selected_138.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 137,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_137',);
                    }

                }

                // _assetic_64dd8c5_138
                if ($pathinfo === '/css/64dd8c5_part_1_finder_139.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 138,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_138',);
                }

                // _assetic_64dd8c5_139
                if ($pathinfo === '/css/64dd8c5_part_1_explorerlevel_140.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 139,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_139',);
                }

                // _assetic_64dd8c5_140
                if ($pathinfo === '/css/64dd8c5_part_1_confirmedlist_141.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 140,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_140',);
                }

                // _assetic_64dd8c5_141
                if ($pathinfo === '/css/64dd8c5_part_1_tree_142.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 141,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_141',);
                }

                // _assetic_64dd8c5_142
                if ($pathinfo === '/css/64dd8c5_part_1_discoverybar_143.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 142,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_142',);
                }

                // _assetic_64dd8c5_143
                if ($pathinfo === '/css/64dd8c5_part_1_contenttypeselector_144.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 143,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_143',);
                }

                // _assetic_64dd8c5_144
                if ($pathinfo === '/css/64dd8c5_part_1_tree_145.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 144,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_144',);
                }

                // _assetic_64dd8c5_145
                if ($pathinfo === '/css/64dd8c5_part_1_button_146.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 145,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_145',);
                }

                // _assetic_64dd8c5_146
                if ($pathinfo === '/css/64dd8c5_part_1_preview_147.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 146,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_146',);
                }

                // _assetic_64dd8c5_147
                if ($pathinfo === '/css/64dd8c5_part_1_create-content_148.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 147,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_147',);
                }

                // _assetic_64dd8c5_148
                if ($pathinfo === '/css/64dd8c5_part_1_translate_149.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 148,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_148',);
                }

                if (0 === strpos($pathinfo, '/css/64dd8c5_part_1_dashboard')) {
                    // _assetic_64dd8c5_149
                    if ($pathinfo === '/css/64dd8c5_part_1_dashboard_150.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 149,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_149',);
                    }

                    // _assetic_64dd8c5_150
                    if ($pathinfo === '/css/64dd8c5_part_1_dashboard-blocks_151.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 150,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_150',);
                    }

                }

                if (0 === strpos($pathinfo, '/css/64dd8c5_part_1_s')) {
                    if (0 === strpos($pathinfo, '/css/64dd8c5_part_1_studiop')) {
                        // _assetic_64dd8c5_151
                        if ($pathinfo === '/css/64dd8c5_part_1_studiopresentation_152.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 151,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_151',);
                        }

                        // _assetic_64dd8c5_152
                        if ($pathinfo === '/css/64dd8c5_part_1_studiopluspresentation_153.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 152,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_152',);
                        }

                    }

                    // _assetic_64dd8c5_153
                    if ($pathinfo === '/css/64dd8c5_part_1_serverside_154.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 153,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_153',);
                    }

                }

                // _assetic_64dd8c5_154
                if ($pathinfo === '/css/64dd8c5_part_1_navigationhub_155.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 154,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_154',);
                }

                // _assetic_64dd8c5_155
                if ($pathinfo === '/css/64dd8c5_part_1_locationview_156.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 155,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_155',);
                }

                // _assetic_64dd8c5_156
                if ($pathinfo === '/css/64dd8c5_part_1_trash_157.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 156,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_156',);
                }

                if (0 === strpos($pathinfo, '/css/64dd8c5_part_1_s')) {
                    if (0 === strpos($pathinfo, '/css/64dd8c5_part_1_search')) {
                        // _assetic_64dd8c5_157
                        if ($pathinfo === '/css/64dd8c5_part_1_search_158.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 157,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_157',);
                        }

                        // _assetic_64dd8c5_158
                        if ($pathinfo === '/css/64dd8c5_part_1_searchlist_159.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 158,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_158',);
                        }

                    }

                    // _assetic_64dd8c5_159
                    if ($pathinfo === '/css/64dd8c5_part_1_subitembox_160.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 159,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_159',);
                    }

                }

                if (0 === strpos($pathinfo, '/css/64dd8c5_part_1_list')) {
                    // _assetic_64dd8c5_160
                    if ($pathinfo === '/css/64dd8c5_part_1_listmore_161.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 160,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_160',);
                    }

                    // _assetic_64dd8c5_161
                    if ($pathinfo === '/css/64dd8c5_part_1_listitem_162.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 161,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_161',);
                    }

                }

                // _assetic_64dd8c5_162
                if ($pathinfo === '/css/64dd8c5_part_1_griditem_163.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 162,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_162',);
                }

                // _assetic_64dd8c5_163
                if ($pathinfo === '/css/64dd8c5_part_1_rawcontent_164.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 163,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_163',);
                }

                // _assetic_64dd8c5_164
                if ($pathinfo === '/css/64dd8c5_part_1_languageswitcher_165.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 164,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_164',);
                }

                // _assetic_64dd8c5_165
                if ($pathinfo === '/css/64dd8c5_part_1_asynchronous_166.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 165,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_165',);
                }

                if (0 === strpos($pathinfo, '/css/64dd8c5_part_1_d')) {
                    // _assetic_64dd8c5_166
                    if ($pathinfo === '/css/64dd8c5_part_1_draftconflict_167.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 166,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_166',);
                    }

                    // _assetic_64dd8c5_167
                    if ($pathinfo === '/css/64dd8c5_part_1_details_168.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 167,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_167',);
                    }

                }

                // _assetic_64dd8c5_168
                if ($pathinfo === '/css/64dd8c5_part_1_relations_169.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 168,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_168',);
                }

                // _assetic_64dd8c5_169
                if ($pathinfo === '/css/64dd8c5_part_1_locations_170.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 169,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_169',);
                }

                // _assetic_64dd8c5_170
                if ($pathinfo === '/css/64dd8c5_part_1_versions_171.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 170,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_170',);
                }

                // _assetic_64dd8c5_171
                if ($pathinfo === '/css/64dd8c5_part_1_field_172.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 171,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_171',);
                }

                // _assetic_64dd8c5_172
                if ($pathinfo === '/css/64dd8c5_part_1_url_173.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 172,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_172',);
                }

                // _assetic_64dd8c5_173
                if ($pathinfo === '/css/64dd8c5_part_1_binaryfile_174.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 173,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_173',);
                }

                // _assetic_64dd8c5_174
                if ($pathinfo === '/css/64dd8c5_part_1_maplocation_175.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 174,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_174',);
                }

                // _assetic_64dd8c5_175
                if ($pathinfo === '/css/64dd8c5_part_1_xmltext_176.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 175,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_175',);
                }

                // _assetic_64dd8c5_176
                if ($pathinfo === '/css/64dd8c5_part_1_media_177.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 176,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_176',);
                }

                // _assetic_64dd8c5_177
                if ($pathinfo === '/css/64dd8c5_part_1_richtext_178.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 177,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_177',);
                }

                if (0 === strpos($pathinfo, '/css/64dd8c5_part_1_contentedit')) {
                    // _assetic_64dd8c5_178
                    if ($pathinfo === '/css/64dd8c5_part_1_contentedit_179.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 178,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_178',);
                    }

                    // _assetic_64dd8c5_179
                    if ($pathinfo === '/css/64dd8c5_part_1_contenteditform_180.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 179,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_179',);
                    }

                }

                // _assetic_64dd8c5_180
                if ($pathinfo === '/css/64dd8c5_part_1_editpreview_181.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 180,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_180',);
                }

                // _assetic_64dd8c5_181
                if ($pathinfo === '/css/64dd8c5_part_1_fieldedit_182.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 181,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_181',);
                }

                if (0 === strpos($pathinfo, '/css/64dd8c5_part_1_user')) {
                    // _assetic_64dd8c5_182
                    if ($pathinfo === '/css/64dd8c5_part_1_userprofile_183.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 182,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_182',);
                    }

                    // _assetic_64dd8c5_183
                    if ($pathinfo === '/css/64dd8c5_part_1_usermenu_184.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 183,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_183',);
                    }

                }

                // _assetic_64dd8c5_184
                if ($pathinfo === '/css/64dd8c5_part_1_keyword_185.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 184,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_184',);
                }

                // _assetic_64dd8c5_185
                if ($pathinfo === '/css/64dd8c5_part_1_country_186.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 185,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_185',);
                }

                // _assetic_64dd8c5_186
                if ($pathinfo === '/css/64dd8c5_part_1_maplocation_187.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 186,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_186',);
                }

                // _assetic_64dd8c5_187
                if ($pathinfo === '/css/64dd8c5_part_1_author_188.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 187,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_187',);
                }

                // _assetic_64dd8c5_188
                if ($pathinfo === '/css/64dd8c5_part_1_selection_189.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 188,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_188',);
                }

                // _assetic_64dd8c5_189
                if ($pathinfo === '/css/64dd8c5_part_1_binarybase_190.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 189,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_189',);
                }

                // _assetic_64dd8c5_190
                if ($pathinfo === '/css/64dd8c5_part_1_image_191.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 190,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_190',);
                }

                // _assetic_64dd8c5_191
                if ($pathinfo === '/css/64dd8c5_part_1_media_192.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 191,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_191',);
                }

                // _assetic_64dd8c5_192
                if ($pathinfo === '/css/64dd8c5_part_1_binaryfile_193.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 192,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_192',);
                }

                if (0 === strpos($pathinfo, '/css/64dd8c5_part_1_date')) {
                    // _assetic_64dd8c5_193
                    if ($pathinfo === '/css/64dd8c5_part_1_date_194.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 193,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_193',);
                    }

                    // _assetic_64dd8c5_194
                    if ($pathinfo === '/css/64dd8c5_part_1_dateandtime_195.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 194,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_194',);
                    }

                }

                if (0 === strpos($pathinfo, '/css/64dd8c5_part_1_relation')) {
                    // _assetic_64dd8c5_195
                    if ($pathinfo === '/css/64dd8c5_part_1_relation_196.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 195,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_195',);
                    }

                    // _assetic_64dd8c5_196
                    if ($pathinfo === '/css/64dd8c5_part_1_relationlist_197.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 196,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_196',);
                    }

                }

                // _assetic_64dd8c5_197
                if ($pathinfo === '/css/64dd8c5_part_1_country_198.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 197,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_197',);
                }

                // _assetic_64dd8c5_198
                if ($pathinfo === '/css/64dd8c5_part_1_richtext_199.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 198,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_198',);
                }

                if (0 === strpos($pathinfo, '/css/64dd8c5_part_1_u')) {
                    // _assetic_64dd8c5_199
                    if ($pathinfo === '/css/64dd8c5_part_1_url_200.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 199,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_199',);
                    }

                    // _assetic_64dd8c5_200
                    if ($pathinfo === '/css/64dd8c5_part_1_user_201.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 200,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_200',);
                    }

                }

                // _assetic_64dd8c5_201
                if ($pathinfo === '/css/64dd8c5_part_1_base_202.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 201,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_201',);
                }

                // _assetic_64dd8c5_202
                if ($pathinfo === '/css/64dd8c5_part_1_asynchronous_203.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 202,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_202',);
                }

                // _assetic_64dd8c5_203
                if ($pathinfo === '/css/64dd8c5_part_1_icons_204.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 203,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_203',);
                }

                // _assetic_64dd8c5_204
                if ($pathinfo === '/css/64dd8c5_part_1_contenttypeicons_205.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 204,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_204',);
                }

                // _assetic_64dd8c5_205
                if ($pathinfo === '/css/64dd8c5_part_1_tabs_206.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 205,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_205',);
                }

                // _assetic_64dd8c5_206
                if ($pathinfo === '/css/64dd8c5_part_1_page-header_207.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 206,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_206',);
                }

                if (0 === strpos($pathinfo, '/css/64dd8c5_part_1_se')) {
                    // _assetic_64dd8c5_207
                    if ($pathinfo === '/css/64dd8c5_part_1_serverside-content_208.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 207,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_207',);
                    }

                    // _assetic_64dd8c5_208
                    if ($pathinfo === '/css/64dd8c5_part_1_selection-filter_209.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 208,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_208',);
                    }

                }

                // _assetic_64dd8c5_209
                if ($pathinfo === '/css/64dd8c5_part_1_button_210.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 209,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_209',);
                }

                // _assetic_64dd8c5_210
                if ($pathinfo === '/css/64dd8c5_part_1_form_211.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 210,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_210',);
                }

                // _assetic_64dd8c5_211
                if ($pathinfo === '/css/64dd8c5_part_1_selection-table_212.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 211,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_211',);
                }

                // _assetic_64dd8c5_212
                if ($pathinfo === '/css/64dd8c5_part_1_yui-calendar_213.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 212,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_212',);
                }

                // _assetic_64dd8c5_213
                if ($pathinfo === '/css/64dd8c5_part_1_embed_214.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 213,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_213',);
                }

                // _assetic_64dd8c5_214
                if ($pathinfo === '/css/64dd8c5_part_1_richtext_215.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 214,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_214',);
                }

                // _assetic_64dd8c5_215
                if ($pathinfo === '/css/64dd8c5_part_1_collapsetoggle_216.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 215,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_215',);
                }

                // _assetic_64dd8c5_216
                if ($pathinfo === '/css/64dd8c5_part_1_loadmorepagination_217.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 216,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_216',);
                }

                // _assetic_64dd8c5_217
                if ($pathinfo === '/css/64dd8c5_part_1_general_218.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 217,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_217',);
                }

                // _assetic_64dd8c5_218
                if ($pathinfo === '/css/64dd8c5_part_1_content_219.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 218,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_218',);
                }

                if (0 === strpos($pathinfo, '/css/64dd8c5_part_1_l')) {
                    // _assetic_64dd8c5_219
                    if ($pathinfo === '/css/64dd8c5_part_1_labeled-button_220.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 219,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_219',);
                    }

                    // _assetic_64dd8c5_220
                    if ($pathinfo === '/css/64dd8c5_part_1_linkedit_221.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 220,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_220',);
                    }

                }

                // _assetic_64dd8c5_221
                if ($pathinfo === '/css/64dd8c5_part_1_blockremove_222.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 221,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_221',);
                }

                if (0 === strpos($pathinfo, '/css/64dd8c5_part_1_embed')) {
                    // _assetic_64dd8c5_222
                    if ($pathinfo === '/css/64dd8c5_part_1_embedhref_223.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 222,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_222',);
                    }

                    // _assetic_64dd8c5_223
                    if ($pathinfo === '/css/64dd8c5_part_1_embedalign_224.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 223,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_223',);
                    }

                }

                // _assetic_64dd8c5_224
                if ($pathinfo === '/css/64dd8c5_part_1_move_225.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 224,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_224',);
                }

                // _assetic_64dd8c5_225
                if ($pathinfo === '/css/64dd8c5_part_1_general_226.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 225,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_225',);
                }

                // _assetic_64dd8c5_226
                if ($pathinfo === '/css/64dd8c5_part_1_file-item_227.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 226,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_226',);
                }

                if (0 === strpos($pathinfo, '/css/64dd8c5_part_1_upload-')) {
                    // _assetic_64dd8c5_227
                    if ($pathinfo === '/css/64dd8c5_part_1_upload-form_228.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 227,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_227',);
                    }

                    // _assetic_64dd8c5_228
                    if ($pathinfo === '/css/64dd8c5_part_1_upload-popup_229.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 228,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_228',);
                    }

                }

                // _assetic_64dd8c5_229
                if ($pathinfo === '/css/64dd8c5_part_1_general_230.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 229,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_229',);
                }

                // _assetic_64dd8c5_230
                if ($pathinfo === '/css/64dd8c5_part_1_file-item_231.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 230,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_230',);
                }

                if (0 === strpos($pathinfo, '/css/64dd8c5_part_1_upload-')) {
                    // _assetic_64dd8c5_231
                    if ($pathinfo === '/css/64dd8c5_part_1_upload-form_232.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 231,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_231',);
                    }

                    // _assetic_64dd8c5_232
                    if ($pathinfo === '/css/64dd8c5_part_1_upload-popup_233.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '64dd8c5',  'pos' => 232,  '_format' => 'css',  '_route' => '_assetic_64dd8c5_232',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/js/d0ac14a')) {
            // _assetic_d0ac14a
            if ($pathinfo === '/js/d0ac14a.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'd0ac14a',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_d0ac14a',);
            }

            if (0 === strpos($pathinfo, '/js/d0ac14a_')) {
                // _assetic_d0ac14a_0
                if ($pathinfo === '/js/d0ac14a_translator.min_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'd0ac14a',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_d0ac14a_0',);
                }

                // _assetic_d0ac14a_1
                if ($pathinfo === '/js/d0ac14a_yui-min_2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'd0ac14a',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_d0ac14a_1',);
                }

                // _assetic_d0ac14a_2
                if ($pathinfo === '/js/d0ac14a_handlebars-intl.min_3.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'd0ac14a',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_d0ac14a_2',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'ezpublish.security.controller:loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'login_check');
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        // _ezpublishLocation
        if (0 === strpos($pathinfo, '/content/location') && preg_match('#^/content/location/(?P<locationId>[^/]++)(?:/(?P<viewType>[^/]++)(?:/(?P<layout>[^/]++))?)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => '_ezpublishLocation')), array (  '_controller' => 'ez_content:viewLocation',  'viewType' => 'full',  'layout' => true,));
        }

        if (0 === strpos($pathinfo, '/view/content')) {
            // _ez_content_view_redirect
            if (preg_match('#^/view/content/(?P<contentId>[^/]++)/(?P<language>[^/]++)/(?P<viewType>[^/]++)/(?P<layout>[^/]++)/(?P<locationId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_ez_content_view_redirect')), array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => '_ez_content_view',  'permanent' => true,  'ignoreAttributes' =>   array (    0 => 'language',  ),));
            }

            // _ez_content_view
            if (preg_match('#^/view/content/(?P<contentId>[^/]++)(?:/(?P<viewType>[^/]++)(?:/(?P<layout>[^/]++)(?:/(?P<locationId>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_ez_content_view')), array (  '_controller' => 'ez_content:viewAction',  'viewType' => 'full',  'locationId' => NULL,  'layout' => true,));
            }

        }

        if (0 === strpos($pathinfo, '/content/versionview')) {
            // _ezpublishPreviewContent
            if (preg_match('#^/content/versionview/(?P<contentId>[^/]++)/(?P<versionNo>[^/]++)/(?P<language>[^/]++)/site_access/(?P<siteAccessName>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not__ezpublishPreviewContent;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => '_ezpublishPreviewContent')), array (  '_controller' => 'ezpublish.controller.content.preview:previewContentAction',));
            }
            not__ezpublishPreviewContent:

            // _ezpublishPreviewContentDefaultSa
            if (preg_match('#^/content/versionview/(?P<contentId>[^/]++)/(?P<versionNo>[^/]++)/(?P<language>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not__ezpublishPreviewContentDefaultSa;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => '_ezpublishPreviewContentDefaultSa')), array (  '_controller' => 'ezpublish.controller.content.preview:previewContentAction',));
            }
            not__ezpublishPreviewContentDefaultSa:

        }

        // _ez_user_hash
        if ($pathinfo === '/_fos_user_context_hash') {
            return array('_route' => '_ez_user_hash');
        }

        if (0 === strpos($pathinfo, '/content/download')) {
            // ez_content_download
            if (preg_match('#^/content/download/(?P<contentId>[^/]++)/(?P<fieldIdentifier>[^/]++)/(?P<filename>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ez_content_download')), array (  '_controller' => 'ezpublish.controller.content.download:downloadBinaryFileAction',));
            }

            // ez_content_download_field_id
            if (preg_match('#^/content/download/(?P<contentId>[^/]++)/(?P<fieldId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ez_content_download_field_id')), array (  '_controller' => 'ezpublish.controller.content.download_redirection:redirectToContentDownloadAction',));
            }

        }

        if (0 === strpos($pathinfo, '/api/ezp/v2')) {
            // ezpublish_rest_loadRootResource
            if (rtrim($pathinfo, '/') === '/api/ezp/v2') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ezpublish_rest_loadRootResource;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'ezpublish_rest_loadRootResource');
                }

                return array (  '_controller' => 'ezpublish_rest.controller.root:loadRootResource',  '_route' => 'ezpublish_rest_loadRootResource',);
            }
            not_ezpublish_rest_loadRootResource:

            if (0 === strpos($pathinfo, '/api/ezp/v2/content')) {
                if (0 === strpos($pathinfo, '/api/ezp/v2/content/sections')) {
                    // ezpublish_rest_listSections
                    if ($pathinfo === '/api/ezp/v2/content/sections') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_ezpublish_rest_listSections;
                        }

                        return array (  '_controller' => 'ezpublish_rest.controller.section:listSections',  '_route' => 'ezpublish_rest_listSections',);
                    }
                    not_ezpublish_rest_listSections:

                    // ezpublish_rest_createSection
                    if ($pathinfo === '/api/ezp/v2/content/sections') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_ezpublish_rest_createSection;
                        }

                        return array (  '_controller' => 'ezpublish_rest.controller.section:createSection',  '_route' => 'ezpublish_rest_createSection',);
                    }
                    not_ezpublish_rest_createSection:

                    // ezpublish_rest_loadSection
                    if (preg_match('#^/api/ezp/v2/content/sections/(?P<sectionId>\\d+)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_ezpublish_rest_loadSection;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_loadSection')), array (  '_controller' => 'ezpublish_rest.controller.section:loadSection',));
                    }
                    not_ezpublish_rest_loadSection:

                    // ezpublish_rest_updateSection
                    if (preg_match('#^/api/ezp/v2/content/sections/(?P<sectionId>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PATCH') {
                            $allow[] = 'PATCH';
                            goto not_ezpublish_rest_updateSection;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_updateSection')), array (  '_controller' => 'ezpublish_rest.controller.section:updateSection',));
                    }
                    not_ezpublish_rest_updateSection:

                    // ezpublish_rest_deleteSection
                    if (preg_match('#^/api/ezp/v2/content/sections/(?P<sectionId>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_ezpublish_rest_deleteSection;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_deleteSection')), array (  '_controller' => 'ezpublish_rest.controller.section:deleteSection',));
                    }
                    not_ezpublish_rest_deleteSection:

                }

                if (0 === strpos($pathinfo, '/api/ezp/v2/content/objects')) {
                    // ezpublish_rest_redirectContent
                    if ($pathinfo === '/api/ezp/v2/content/objects') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_ezpublish_rest_redirectContent;
                        }

                        return array (  '_controller' => 'ezpublish_rest.controller.content:redirectContent',  '_route' => 'ezpublish_rest_redirectContent',);
                    }
                    not_ezpublish_rest_redirectContent:

                    // ezpublish_rest_createContent
                    if ($pathinfo === '/api/ezp/v2/content/objects') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_ezpublish_rest_createContent;
                        }

                        return array (  '_controller' => 'ezpublish_rest.controller.content:createContent',  '_route' => 'ezpublish_rest_createContent',);
                    }
                    not_ezpublish_rest_createContent:

                    // ezpublish_rest_updateContentMetadata
                    if (preg_match('#^/api/ezp/v2/content/objects/(?P<contentId>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PATCH') {
                            $allow[] = 'PATCH';
                            goto not_ezpublish_rest_updateContentMetadata;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_updateContentMetadata')), array (  '_controller' => 'ezpublish_rest.controller.content:updateContentMetadata',));
                    }
                    not_ezpublish_rest_updateContentMetadata:

                    // ezpublish_rest_loadContent
                    if (preg_match('#^/api/ezp/v2/content/objects/(?P<contentId>\\d+)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_ezpublish_rest_loadContent;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_loadContent')), array (  '_controller' => 'ezpublish_rest.controller.content:loadContent',));
                    }
                    not_ezpublish_rest_loadContent:

                    // ezpublish_rest_deleteContent
                    if (preg_match('#^/api/ezp/v2/content/objects/(?P<contentId>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_ezpublish_rest_deleteContent;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_deleteContent')), array (  '_controller' => 'ezpublish_rest.controller.content:deleteContent',));
                    }
                    not_ezpublish_rest_deleteContent:

                    // ezpublish_rest_copyContent
                    if (preg_match('#^/api/ezp/v2/content/objects/(?P<contentId>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'COPY') {
                            $allow[] = 'COPY';
                            goto not_ezpublish_rest_copyContent;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_copyContent')), array (  '_controller' => 'ezpublish_rest.controller.content:copyContent',));
                    }
                    not_ezpublish_rest_copyContent:

                    // ezpublish_rest_redirectCurrentVersionRelations
                    if (preg_match('#^/api/ezp/v2/content/objects/(?P<contentId>\\d+)/relations$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_ezpublish_rest_redirectCurrentVersionRelations;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_redirectCurrentVersionRelations')), array (  '_controller' => 'ezpublish_rest.controller.content:redirectCurrentVersionRelations',));
                    }
                    not_ezpublish_rest_redirectCurrentVersionRelations:

                    // ezpublish_rest_loadContentVersions
                    if (preg_match('#^/api/ezp/v2/content/objects/(?P<contentId>\\d+)/versions$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_ezpublish_rest_loadContentVersions;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_loadContentVersions')), array (  '_controller' => 'ezpublish_rest.controller.content:loadContentVersions',));
                    }
                    not_ezpublish_rest_loadContentVersions:

                    // ezpublish_rest_loadVersionRelations
                    if (preg_match('#^/api/ezp/v2/content/objects/(?P<contentId>\\d+)/versions/(?P<versionNumber>\\d+)/relations$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_ezpublish_rest_loadVersionRelations;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_loadVersionRelations')), array (  '_controller' => 'ezpublish_rest.controller.content:loadVersionRelations',));
                    }
                    not_ezpublish_rest_loadVersionRelations:

                    // ezpublish_rest_createRelation
                    if (preg_match('#^/api/ezp/v2/content/objects/(?P<contentId>\\d+)/versions/(?P<versionNumber>\\d+)/relations$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_ezpublish_rest_createRelation;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_createRelation')), array (  '_controller' => 'ezpublish_rest.controller.content:createRelation',));
                    }
                    not_ezpublish_rest_createRelation:

                    // ezpublish_rest_loadVersionRelation
                    if (preg_match('#^/api/ezp/v2/content/objects/(?P<contentId>\\d+)/versions/(?P<versionNumber>\\d+)/relations/(?P<relationId>\\d+)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_ezpublish_rest_loadVersionRelation;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_loadVersionRelation')), array (  '_controller' => 'ezpublish_rest.controller.content:loadVersionRelation',));
                    }
                    not_ezpublish_rest_loadVersionRelation:

                    // ezpublish_rest_removeRelation
                    if (preg_match('#^/api/ezp/v2/content/objects/(?P<contentId>\\d+)/versions/(?P<versionNumber>\\d+)/relations/(?P<relationId>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_ezpublish_rest_removeRelation;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_removeRelation')), array (  '_controller' => 'ezpublish_rest.controller.content:removeRelation',));
                    }
                    not_ezpublish_rest_removeRelation:

                    // ezpublish_rest_loadContentInVersion
                    if (preg_match('#^/api/ezp/v2/content/objects/(?P<contentId>\\d+)/versions/(?P<versionNumber>\\d+)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_ezpublish_rest_loadContentInVersion;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_loadContentInVersion')), array (  '_controller' => 'ezpublish_rest.controller.content:loadContentInVersion',));
                    }
                    not_ezpublish_rest_loadContentInVersion:

                    // ezpublish_rest_updateVersion
                    if (preg_match('#^/api/ezp/v2/content/objects/(?P<contentId>\\d+)/versions/(?P<versionNumber>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PATCH') {
                            $allow[] = 'PATCH';
                            goto not_ezpublish_rest_updateVersion;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_updateVersion')), array (  '_controller' => 'ezpublish_rest.controller.content:updateVersion',));
                    }
                    not_ezpublish_rest_updateVersion:

                    // ezpublish_rest_deleteContentVersion
                    if (preg_match('#^/api/ezp/v2/content/objects/(?P<contentId>\\d+)/versions/(?P<versionNumber>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_ezpublish_rest_deleteContentVersion;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_deleteContentVersion')), array (  '_controller' => 'ezpublish_rest.controller.content:deleteContentVersion',));
                    }
                    not_ezpublish_rest_deleteContentVersion:

                    // ezpublish_rest_createDraftFromVersion
                    if (preg_match('#^/api/ezp/v2/content/objects/(?P<contentId>\\d+)/versions/(?P<versionNumber>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'COPY') {
                            $allow[] = 'COPY';
                            goto not_ezpublish_rest_createDraftFromVersion;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_createDraftFromVersion')), array (  '_controller' => 'ezpublish_rest.controller.content:createDraftFromVersion',));
                    }
                    not_ezpublish_rest_createDraftFromVersion:

                    // ezpublish_rest_publishVersion
                    if (preg_match('#^/api/ezp/v2/content/objects/(?P<contentId>\\d+)/versions/(?P<versionNumber>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUBLISH') {
                            $allow[] = 'PUBLISH';
                            goto not_ezpublish_rest_publishVersion;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_publishVersion')), array (  '_controller' => 'ezpublish_rest.controller.content:publishVersion',));
                    }
                    not_ezpublish_rest_publishVersion:

                    // ezpublish_rest_redirectCurrentVersion
                    if (preg_match('#^/api/ezp/v2/content/objects/(?P<contentId>\\d+)/currentversion$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_ezpublish_rest_redirectCurrentVersion;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_redirectCurrentVersion')), array (  '_controller' => 'ezpublish_rest.controller.content:redirectCurrentVersion',));
                    }
                    not_ezpublish_rest_redirectCurrentVersion:

                    // ezpublish_rest_createDraftFromCurrentVersion
                    if (preg_match('#^/api/ezp/v2/content/objects/(?P<contentId>\\d+)/currentversion$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'COPY') {
                            $allow[] = 'COPY';
                            goto not_ezpublish_rest_createDraftFromCurrentVersion;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_createDraftFromCurrentVersion')), array (  '_controller' => 'ezpublish_rest.controller.content:createDraftFromCurrentVersion',));
                    }
                    not_ezpublish_rest_createDraftFromCurrentVersion:

                }

                // ezpublish_rest_binaryContent_getImageVariation
                if (0 === strpos($pathinfo, '/api/ezp/v2/content/binary/images') && preg_match('#^/api/ezp/v2/content/binary/images/(?P<imageId>\\d+-\\d+(-\\d+)?)/variations/(?P<variationIdentifier>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_ezpublish_rest_binaryContent_getImageVariation;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_binaryContent_getImageVariation')), array (  '_controller' => 'ezpublish_rest.controller.binary_content:getImageVariation',));
                }
                not_ezpublish_rest_binaryContent_getImageVariation:

                // ezpublish_rest_createContentView
                if ($pathinfo === '/api/ezp/v2/content/views') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_ezpublish_rest_createContentView;
                    }

                    return array (  '_controller' => 'ezpublish_rest.controller.content:createView',  '_route' => 'ezpublish_rest_createContentView',);
                }
                not_ezpublish_rest_createContentView:

            }

            if (0 === strpos($pathinfo, '/api/ezp/v2/views')) {
                // ezpublish_rest_views_create
                if ($pathinfo === '/api/ezp/v2/views') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_ezpublish_rest_views_create;
                    }

                    return array (  '_controller' => 'ezpublish_rest.controller.views:createView',  '_route' => 'ezpublish_rest_views_create',);
                }
                not_ezpublish_rest_views_create:

                // ezpublish_rest_views_list
                if ($pathinfo === '/api/ezp/v2/views') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_ezpublish_rest_views_list;
                    }

                    return array (  '_controller' => 'ezpublish_rest.controller.views:listView',  '_route' => 'ezpublish_rest_views_list',);
                }
                not_ezpublish_rest_views_list:

                // ezpublish_rest_views_load
                if (preg_match('#^/api/ezp/v2/views/(?P<viewId>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_ezpublish_rest_views_load;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_views_load')), array (  '_controller' => 'ezpublish_rest.controller.views:getView',));
                }
                not_ezpublish_rest_views_load:

                // ezpublish_rest_views_load_results
                if (preg_match('#^/api/ezp/v2/views/(?P<viewId>[^/]++)/results$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_ezpublish_rest_views_load_results;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_views_load_results')), array (  '_controller' => 'ezpublish_rest.controller.views:loadViewResults',));
                }
                not_ezpublish_rest_views_load_results:

            }

            if (0 === strpos($pathinfo, '/api/ezp/v2/content')) {
                if (0 === strpos($pathinfo, '/api/ezp/v2/content/objects')) {
                    if (0 === strpos($pathinfo, '/api/ezp/v2/content/objectstategroups')) {
                        // ezpublish_rest_loadObjectStateGroups
                        if ($pathinfo === '/api/ezp/v2/content/objectstategroups') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_ezpublish_rest_loadObjectStateGroups;
                            }

                            return array (  '_controller' => 'ezpublish_rest.controller.object_state:loadObjectStateGroups',  '_route' => 'ezpublish_rest_loadObjectStateGroups',);
                        }
                        not_ezpublish_rest_loadObjectStateGroups:

                        // ezpublish_rest_createObjectStateGroup
                        if ($pathinfo === '/api/ezp/v2/content/objectstategroups') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_ezpublish_rest_createObjectStateGroup;
                            }

                            return array (  '_controller' => 'ezpublish_rest.controller.object_state:createObjectStateGroup',  '_route' => 'ezpublish_rest_createObjectStateGroup',);
                        }
                        not_ezpublish_rest_createObjectStateGroup:

                        // ezpublish_rest_loadObjectStateGroup
                        if (preg_match('#^/api/ezp/v2/content/objectstategroups/(?P<objectStateGroupId>\\d+)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_ezpublish_rest_loadObjectStateGroup;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_loadObjectStateGroup')), array (  '_controller' => 'ezpublish_rest.controller.object_state:loadObjectStateGroup',));
                        }
                        not_ezpublish_rest_loadObjectStateGroup:

                        // ezpublish_rest_updateObjectStateGroup
                        if (preg_match('#^/api/ezp/v2/content/objectstategroups/(?P<objectStateGroupId>\\d+)$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'PATCH') {
                                $allow[] = 'PATCH';
                                goto not_ezpublish_rest_updateObjectStateGroup;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_updateObjectStateGroup')), array (  '_controller' => 'ezpublish_rest.controller.object_state:updateObjectStateGroup',));
                        }
                        not_ezpublish_rest_updateObjectStateGroup:

                        // ezpublish_rest_deleteObjectStateGroup
                        if (preg_match('#^/api/ezp/v2/content/objectstategroups/(?P<objectStateGroupId>\\d+)$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'DELETE') {
                                $allow[] = 'DELETE';
                                goto not_ezpublish_rest_deleteObjectStateGroup;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_deleteObjectStateGroup')), array (  '_controller' => 'ezpublish_rest.controller.object_state:deleteObjectStateGroup',));
                        }
                        not_ezpublish_rest_deleteObjectStateGroup:

                        // ezpublish_rest_loadObjectStates
                        if (preg_match('#^/api/ezp/v2/content/objectstategroups/(?P<objectStateGroupId>\\d+)/objectstates$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_ezpublish_rest_loadObjectStates;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_loadObjectStates')), array (  '_controller' => 'ezpublish_rest.controller.object_state:loadObjectStates',));
                        }
                        not_ezpublish_rest_loadObjectStates:

                        // ezpublish_rest_createObjectState
                        if (preg_match('#^/api/ezp/v2/content/objectstategroups/(?P<objectStateGroupId>\\d+)/objectstates$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_ezpublish_rest_createObjectState;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_createObjectState')), array (  '_controller' => 'ezpublish_rest.controller.object_state:createObjectState',));
                        }
                        not_ezpublish_rest_createObjectState:

                        // ezpublish_rest_loadObjectState
                        if (preg_match('#^/api/ezp/v2/content/objectstategroups/(?P<objectStateGroupId>\\d+)/objectstates/(?P<objectStateId>\\d+)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_ezpublish_rest_loadObjectState;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_loadObjectState')), array (  '_controller' => 'ezpublish_rest.controller.object_state:loadObjectState',));
                        }
                        not_ezpublish_rest_loadObjectState:

                        // ezpublish_rest_updateObjectState
                        if (preg_match('#^/api/ezp/v2/content/objectstategroups/(?P<objectStateGroupId>\\d+)/objectstates/(?P<objectStateId>\\d+)$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'PATCH') {
                                $allow[] = 'PATCH';
                                goto not_ezpublish_rest_updateObjectState;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_updateObjectState')), array (  '_controller' => 'ezpublish_rest.controller.object_state:updateObjectState',));
                        }
                        not_ezpublish_rest_updateObjectState:

                        // ezpublish_rest_deleteObjectState
                        if (preg_match('#^/api/ezp/v2/content/objectstategroups/(?P<objectStateGroupId>\\d+)/objectstates/(?P<objectStateId>\\d+)$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'DELETE') {
                                $allow[] = 'DELETE';
                                goto not_ezpublish_rest_deleteObjectState;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_deleteObjectState')), array (  '_controller' => 'ezpublish_rest.controller.object_state:deleteObjectState',));
                        }
                        not_ezpublish_rest_deleteObjectState:

                    }

                    // ezpublish_rest_getObjectStatesForContent
                    if (preg_match('#^/api/ezp/v2/content/objects/(?P<contentId>\\d+)/objectstates$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_ezpublish_rest_getObjectStatesForContent;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_getObjectStatesForContent')), array (  '_controller' => 'ezpublish_rest.controller.object_state:getObjectStatesForContent',));
                    }
                    not_ezpublish_rest_getObjectStatesForContent:

                    // ezpublish_rest_setObjectStatesForContent
                    if (preg_match('#^/api/ezp/v2/content/objects/(?P<contentId>\\d+)/objectstates$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PATCH') {
                            $allow[] = 'PATCH';
                            goto not_ezpublish_rest_setObjectStatesForContent;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_setObjectStatesForContent')), array (  '_controller' => 'ezpublish_rest.controller.object_state:setObjectStatesForContent',));
                    }
                    not_ezpublish_rest_setObjectStatesForContent:

                }

                if (0 === strpos($pathinfo, '/api/ezp/v2/content/locations')) {
                    // ezpublish_rest_redirectLocation
                    if ($pathinfo === '/api/ezp/v2/content/locations') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_ezpublish_rest_redirectLocation;
                        }

                        return array (  '_controller' => 'ezpublish_rest.controller.location:redirectLocation',  '_route' => 'ezpublish_rest_redirectLocation',);
                    }
                    not_ezpublish_rest_redirectLocation:

                    // ezpublish_rest_loadLocation
                    if (preg_match('#^/api/ezp/v2/content/locations/(?P<locationPath>[0-9/]+)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_ezpublish_rest_loadLocation;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_loadLocation')), array (  '_controller' => 'ezpublish_rest.controller.location:loadLocation',));
                    }
                    not_ezpublish_rest_loadLocation:

                    // ezpublish_rest_updateLocation
                    if (preg_match('#^/api/ezp/v2/content/locations/(?P<locationPath>[0-9/]+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PATCH') {
                            $allow[] = 'PATCH';
                            goto not_ezpublish_rest_updateLocation;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_updateLocation')), array (  '_controller' => 'ezpublish_rest.controller.location:updateLocation',));
                    }
                    not_ezpublish_rest_updateLocation:

                    // ezpublish_rest_deleteSubtree
                    if (preg_match('#^/api/ezp/v2/content/locations/(?P<locationPath>[0-9/]+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_ezpublish_rest_deleteSubtree;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_deleteSubtree')), array (  '_controller' => 'ezpublish_rest.controller.location:deleteSubtree',));
                    }
                    not_ezpublish_rest_deleteSubtree:

                    // ezpublish_rest_copySubtree
                    if (preg_match('#^/api/ezp/v2/content/locations/(?P<locationPath>[0-9/]+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'COPY') {
                            $allow[] = 'COPY';
                            goto not_ezpublish_rest_copySubtree;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_copySubtree')), array (  '_controller' => 'ezpublish_rest.controller.location:copySubtree',));
                    }
                    not_ezpublish_rest_copySubtree:

                    // ezpublish_rest_moveSubtree
                    if (preg_match('#^/api/ezp/v2/content/locations/(?P<locationPath>[0-9/]+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'MOVE') {
                            $allow[] = 'MOVE';
                            goto not_ezpublish_rest_moveSubtree;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_moveSubtree')), array (  '_controller' => 'ezpublish_rest.controller.location:moveSubtree',));
                    }
                    not_ezpublish_rest_moveSubtree:

                    // ezpublish_rest_swapLocation
                    if (preg_match('#^/api/ezp/v2/content/locations/(?P<locationPath>[0-9/]+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'SWAP') {
                            $allow[] = 'SWAP';
                            goto not_ezpublish_rest_swapLocation;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_swapLocation')), array (  '_controller' => 'ezpublish_rest.controller.location:swapLocation',));
                    }
                    not_ezpublish_rest_swapLocation:

                    // ezpublish_rest_loadLocationChildren
                    if (preg_match('#^/api/ezp/v2/content/locations/(?P<locationPath>[0-9/]+)/children$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_ezpublish_rest_loadLocationChildren;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_loadLocationChildren')), array (  '_controller' => 'ezpublish_rest.controller.location:loadLocationChildren',));
                    }
                    not_ezpublish_rest_loadLocationChildren:

                }

                if (0 === strpos($pathinfo, '/api/ezp/v2/content/objects')) {
                    // ezpublish_rest_loadLocationsForContent
                    if (preg_match('#^/api/ezp/v2/content/objects/(?P<contentId>\\d+)/locations$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_ezpublish_rest_loadLocationsForContent;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_loadLocationsForContent')), array (  '_controller' => 'ezpublish_rest.controller.location:loadLocationsForContent',));
                    }
                    not_ezpublish_rest_loadLocationsForContent:

                    // ezpublish_rest_createLocation
                    if (preg_match('#^/api/ezp/v2/content/objects/(?P<contentId>\\d+)/locations$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_ezpublish_rest_createLocation;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_createLocation')), array (  '_controller' => 'ezpublish_rest.controller.location:createLocation',));
                    }
                    not_ezpublish_rest_createLocation:

                }

                if (0 === strpos($pathinfo, '/api/ezp/v2/content/t')) {
                    if (0 === strpos($pathinfo, '/api/ezp/v2/content/type')) {
                        if (0 === strpos($pathinfo, '/api/ezp/v2/content/typegroups')) {
                            // ezpublish_rest_loadContentTypeGroupList
                            if ($pathinfo === '/api/ezp/v2/content/typegroups') {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_ezpublish_rest_loadContentTypeGroupList;
                                }

                                return array (  '_controller' => 'ezpublish_rest.controller.content_type:loadContentTypeGroupList',  '_route' => 'ezpublish_rest_loadContentTypeGroupList',);
                            }
                            not_ezpublish_rest_loadContentTypeGroupList:

                            // ezpublish_rest_createContentTypeGroup
                            if ($pathinfo === '/api/ezp/v2/content/typegroups') {
                                if ($this->context->getMethod() != 'POST') {
                                    $allow[] = 'POST';
                                    goto not_ezpublish_rest_createContentTypeGroup;
                                }

                                return array (  '_controller' => 'ezpublish_rest.controller.content_type:createContentTypeGroup',  '_route' => 'ezpublish_rest_createContentTypeGroup',);
                            }
                            not_ezpublish_rest_createContentTypeGroup:

                            // ezpublish_rest_loadContentTypeGroup
                            if (preg_match('#^/api/ezp/v2/content/typegroups/(?P<contentTypeGroupId>\\d+)$#s', $pathinfo, $matches)) {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_ezpublish_rest_loadContentTypeGroup;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_loadContentTypeGroup')), array (  '_controller' => 'ezpublish_rest.controller.content_type:loadContentTypeGroup',));
                            }
                            not_ezpublish_rest_loadContentTypeGroup:

                            // ezpublish_rest_updateContentTypeGroup
                            if (preg_match('#^/api/ezp/v2/content/typegroups/(?P<contentTypeGroupId>\\d+)$#s', $pathinfo, $matches)) {
                                if ($this->context->getMethod() != 'PATCH') {
                                    $allow[] = 'PATCH';
                                    goto not_ezpublish_rest_updateContentTypeGroup;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_updateContentTypeGroup')), array (  '_controller' => 'ezpublish_rest.controller.content_type:updateContentTypeGroup',));
                            }
                            not_ezpublish_rest_updateContentTypeGroup:

                            // ezpublish_rest_deleteContentTypeGroup
                            if (preg_match('#^/api/ezp/v2/content/typegroups/(?P<contentTypeGroupId>\\d+)$#s', $pathinfo, $matches)) {
                                if ($this->context->getMethod() != 'DELETE') {
                                    $allow[] = 'DELETE';
                                    goto not_ezpublish_rest_deleteContentTypeGroup;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_deleteContentTypeGroup')), array (  '_controller' => 'ezpublish_rest.controller.content_type:deleteContentTypeGroup',));
                            }
                            not_ezpublish_rest_deleteContentTypeGroup:

                            // ezpublish_rest_listContentTypesForGroup
                            if (preg_match('#^/api/ezp/v2/content/typegroups/(?P<contentTypeGroupId>\\d+)/types$#s', $pathinfo, $matches)) {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_ezpublish_rest_listContentTypesForGroup;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_listContentTypesForGroup')), array (  '_controller' => 'ezpublish_rest.controller.content_type:listContentTypesForGroup',));
                            }
                            not_ezpublish_rest_listContentTypesForGroup:

                            // ezpublish_rest_createContentType
                            if (preg_match('#^/api/ezp/v2/content/typegroups/(?P<contentTypeGroupId>\\d+)/types$#s', $pathinfo, $matches)) {
                                if ($this->context->getMethod() != 'POST') {
                                    $allow[] = 'POST';
                                    goto not_ezpublish_rest_createContentType;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_createContentType')), array (  '_controller' => 'ezpublish_rest.controller.content_type:createContentType',));
                            }
                            not_ezpublish_rest_createContentType:

                        }

                        if (0 === strpos($pathinfo, '/api/ezp/v2/content/types')) {
                            // ezpublish_rest_listContentTypes
                            if ($pathinfo === '/api/ezp/v2/content/types') {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_ezpublish_rest_listContentTypes;
                                }

                                return array (  '_controller' => 'ezpublish_rest.controller.content_type:listContentTypes',  '_route' => 'ezpublish_rest_listContentTypes',);
                            }
                            not_ezpublish_rest_listContentTypes:

                            // ezpublish_rest_copyContentType
                            if (preg_match('#^/api/ezp/v2/content/types/(?P<contentTypeId>\\d+)$#s', $pathinfo, $matches)) {
                                if ($this->context->getMethod() != 'COPY') {
                                    $allow[] = 'COPY';
                                    goto not_ezpublish_rest_copyContentType;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_copyContentType')), array (  '_controller' => 'ezpublish_rest.controller.content_type:copyContentType',));
                            }
                            not_ezpublish_rest_copyContentType:

                            // ezpublish_rest_loadContentType
                            if (preg_match('#^/api/ezp/v2/content/types/(?P<contentTypeId>\\d+)$#s', $pathinfo, $matches)) {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_ezpublish_rest_loadContentType;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_loadContentType')), array (  '_controller' => 'ezpublish_rest.controller.content_type:loadContentType',));
                            }
                            not_ezpublish_rest_loadContentType:

                            // ezpublish_rest_createContentTypeDraft
                            if (preg_match('#^/api/ezp/v2/content/types/(?P<contentTypeId>\\d+)$#s', $pathinfo, $matches)) {
                                if ($this->context->getMethod() != 'POST') {
                                    $allow[] = 'POST';
                                    goto not_ezpublish_rest_createContentTypeDraft;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_createContentTypeDraft')), array (  '_controller' => 'ezpublish_rest.controller.content_type:createContentTypeDraft',));
                            }
                            not_ezpublish_rest_createContentTypeDraft:

                            // ezpublish_rest_deleteContentType
                            if (preg_match('#^/api/ezp/v2/content/types/(?P<contentTypeId>\\d+)$#s', $pathinfo, $matches)) {
                                if ($this->context->getMethod() != 'DELETE') {
                                    $allow[] = 'DELETE';
                                    goto not_ezpublish_rest_deleteContentType;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_deleteContentType')), array (  '_controller' => 'ezpublish_rest.controller.content_type:deleteContentType',));
                            }
                            not_ezpublish_rest_deleteContentType:

                            // ezpublish_rest_deleteContentTypeDraft
                            if (preg_match('#^/api/ezp/v2/content/types/(?P<contentTypeId>\\d+)/draft$#s', $pathinfo, $matches)) {
                                if ($this->context->getMethod() != 'DELETE') {
                                    $allow[] = 'DELETE';
                                    goto not_ezpublish_rest_deleteContentTypeDraft;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_deleteContentTypeDraft')), array (  '_controller' => 'ezpublish_rest.controller.content_type:deleteContentTypeDraft',));
                            }
                            not_ezpublish_rest_deleteContentTypeDraft:

                            // ezpublish_rest_loadContentTypeFieldDefinitionList
                            if (preg_match('#^/api/ezp/v2/content/types/(?P<contentTypeId>\\d+)/fieldDefinitions$#s', $pathinfo, $matches)) {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_ezpublish_rest_loadContentTypeFieldDefinitionList;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_loadContentTypeFieldDefinitionList')), array (  '_controller' => 'ezpublish_rest.controller.content_type:loadContentTypeFieldDefinitionList',));
                            }
                            not_ezpublish_rest_loadContentTypeFieldDefinitionList:

                            // ezpublish_rest_loadContentTypeFieldDefinition
                            if (preg_match('#^/api/ezp/v2/content/types/(?P<contentTypeId>\\d+)/fieldDefinitions/(?P<fieldDefinitionId>\\d+)$#s', $pathinfo, $matches)) {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_ezpublish_rest_loadContentTypeFieldDefinition;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_loadContentTypeFieldDefinition')), array (  '_controller' => 'ezpublish_rest.controller.content_type:loadContentTypeFieldDefinition',));
                            }
                            not_ezpublish_rest_loadContentTypeFieldDefinition:

                            // ezpublish_rest_loadContentTypeDraft
                            if (preg_match('#^/api/ezp/v2/content/types/(?P<contentTypeId>\\d+)/draft$#s', $pathinfo, $matches)) {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_ezpublish_rest_loadContentTypeDraft;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_loadContentTypeDraft')), array (  '_controller' => 'ezpublish_rest.controller.content_type:loadContentTypeDraft',));
                            }
                            not_ezpublish_rest_loadContentTypeDraft:

                            // ezpublish_rest_updateContentTypeDraft
                            if (preg_match('#^/api/ezp/v2/content/types/(?P<contentTypeId>\\d+)/draft$#s', $pathinfo, $matches)) {
                                if ($this->context->getMethod() != 'PATCH') {
                                    $allow[] = 'PATCH';
                                    goto not_ezpublish_rest_updateContentTypeDraft;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_updateContentTypeDraft')), array (  '_controller' => 'ezpublish_rest.controller.content_type:updateContentTypeDraft',));
                            }
                            not_ezpublish_rest_updateContentTypeDraft:

                            // ezpublish_rest_publishContentTypeDraft
                            if (preg_match('#^/api/ezp/v2/content/types/(?P<contentTypeId>\\d+)/draft$#s', $pathinfo, $matches)) {
                                if ($this->context->getMethod() != 'PUBLISH') {
                                    $allow[] = 'PUBLISH';
                                    goto not_ezpublish_rest_publishContentTypeDraft;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_publishContentTypeDraft')), array (  '_controller' => 'ezpublish_rest.controller.content_type:publishContentTypeDraft',));
                            }
                            not_ezpublish_rest_publishContentTypeDraft:

                            // ezpublish_rest_loadContentTypeDraftFieldDefinitionList
                            if (preg_match('#^/api/ezp/v2/content/types/(?P<contentTypeId>\\d+)/draft/fieldDefinitions$#s', $pathinfo, $matches)) {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_ezpublish_rest_loadContentTypeDraftFieldDefinitionList;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_loadContentTypeDraftFieldDefinitionList')), array (  '_controller' => 'ezpublish_rest.controller.content_type:loadContentTypeDraftFieldDefinitionList',));
                            }
                            not_ezpublish_rest_loadContentTypeDraftFieldDefinitionList:

                            // ezpublish_rest_addContentTypeDraftFieldDefinition
                            if (preg_match('#^/api/ezp/v2/content/types/(?P<contentTypeId>\\d+)/draft/fieldDefinitions$#s', $pathinfo, $matches)) {
                                if ($this->context->getMethod() != 'POST') {
                                    $allow[] = 'POST';
                                    goto not_ezpublish_rest_addContentTypeDraftFieldDefinition;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_addContentTypeDraftFieldDefinition')), array (  '_controller' => 'ezpublish_rest.controller.content_type:addContentTypeDraftFieldDefinition',));
                            }
                            not_ezpublish_rest_addContentTypeDraftFieldDefinition:

                            // ezpublish_rest_loadContentTypeDraftFieldDefinition
                            if (preg_match('#^/api/ezp/v2/content/types/(?P<contentTypeId>\\d+)/draft/fieldDefinitions/(?P<fieldDefinitionId>\\d+)$#s', $pathinfo, $matches)) {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_ezpublish_rest_loadContentTypeDraftFieldDefinition;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_loadContentTypeDraftFieldDefinition')), array (  '_controller' => 'ezpublish_rest.controller.content_type:loadContentTypeDraftFieldDefinition',));
                            }
                            not_ezpublish_rest_loadContentTypeDraftFieldDefinition:

                            // ezpublish_rest_updateContentTypeDraftFieldDefinition
                            if (preg_match('#^/api/ezp/v2/content/types/(?P<contentTypeId>\\d+)/draft/fieldDefinitions/(?P<fieldDefinitionId>\\d+)$#s', $pathinfo, $matches)) {
                                if ($this->context->getMethod() != 'PATCH') {
                                    $allow[] = 'PATCH';
                                    goto not_ezpublish_rest_updateContentTypeDraftFieldDefinition;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_updateContentTypeDraftFieldDefinition')), array (  '_controller' => 'ezpublish_rest.controller.content_type:updateContentTypeDraftFieldDefinition',));
                            }
                            not_ezpublish_rest_updateContentTypeDraftFieldDefinition:

                            // ezpublish_rest_removeContentTypeDraftFieldDefinition
                            if (preg_match('#^/api/ezp/v2/content/types/(?P<contentTypeId>\\d+)/draft/fieldDefinitions/(?P<fieldDefinitionId>\\d+)$#s', $pathinfo, $matches)) {
                                if ($this->context->getMethod() != 'DELETE') {
                                    $allow[] = 'DELETE';
                                    goto not_ezpublish_rest_removeContentTypeDraftFieldDefinition;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_removeContentTypeDraftFieldDefinition')), array (  '_controller' => 'ezpublish_rest.controller.content_type:removeContentTypeDraftFieldDefinition',));
                            }
                            not_ezpublish_rest_removeContentTypeDraftFieldDefinition:

                            // ezpublish_rest_loadGroupsOfContentType
                            if (preg_match('#^/api/ezp/v2/content/types/(?P<contentTypeId>\\d+)/groups$#s', $pathinfo, $matches)) {
                                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                    $allow = array_merge($allow, array('GET', 'HEAD'));
                                    goto not_ezpublish_rest_loadGroupsOfContentType;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_loadGroupsOfContentType')), array (  '_controller' => 'ezpublish_rest.controller.content_type:loadGroupsOfContentType',));
                            }
                            not_ezpublish_rest_loadGroupsOfContentType:

                            // ezpublish_rest_linkContentTypeToGroup
                            if (preg_match('#^/api/ezp/v2/content/types/(?P<contentTypeId>\\d+)/groups$#s', $pathinfo, $matches)) {
                                if ($this->context->getMethod() != 'POST') {
                                    $allow[] = 'POST';
                                    goto not_ezpublish_rest_linkContentTypeToGroup;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_linkContentTypeToGroup')), array (  '_controller' => 'ezpublish_rest.controller.content_type:linkContentTypeToGroup',));
                            }
                            not_ezpublish_rest_linkContentTypeToGroup:

                            // ezpublish_rest_unlinkContentTypeFromGroup
                            if (preg_match('#^/api/ezp/v2/content/types/(?P<contentTypeId>\\d+)/groups/(?P<contentTypeGroupId>\\d+)$#s', $pathinfo, $matches)) {
                                if ($this->context->getMethod() != 'DELETE') {
                                    $allow[] = 'DELETE';
                                    goto not_ezpublish_rest_unlinkContentTypeFromGroup;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_unlinkContentTypeFromGroup')), array (  '_controller' => 'ezpublish_rest.controller.content_type:unlinkContentTypeFromGroup',));
                            }
                            not_ezpublish_rest_unlinkContentTypeFromGroup:

                        }

                    }

                    if (0 === strpos($pathinfo, '/api/ezp/v2/content/trash')) {
                        // ezpublish_rest_loadTrashItems
                        if ($pathinfo === '/api/ezp/v2/content/trash') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_ezpublish_rest_loadTrashItems;
                            }

                            return array (  '_controller' => 'ezpublish_rest.controller.trash:loadTrashItems',  '_route' => 'ezpublish_rest_loadTrashItems',);
                        }
                        not_ezpublish_rest_loadTrashItems:

                        // ezpublish_rest_emptyTrash
                        if ($pathinfo === '/api/ezp/v2/content/trash') {
                            if ($this->context->getMethod() != 'DELETE') {
                                $allow[] = 'DELETE';
                                goto not_ezpublish_rest_emptyTrash;
                            }

                            return array (  '_controller' => 'ezpublish_rest.controller.trash:emptyTrash',  '_route' => 'ezpublish_rest_emptyTrash',);
                        }
                        not_ezpublish_rest_emptyTrash:

                        // ezpublish_rest_loadTrashItem
                        if (preg_match('#^/api/ezp/v2/content/trash/(?P<trashItemId>\\d+)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_ezpublish_rest_loadTrashItem;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_loadTrashItem')), array (  '_controller' => 'ezpublish_rest.controller.trash:loadTrashItem',));
                        }
                        not_ezpublish_rest_loadTrashItem:

                        // ezpublish_rest_deleteTrashItem
                        if (preg_match('#^/api/ezp/v2/content/trash/(?P<trashItemId>\\d+)$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'DELETE') {
                                $allow[] = 'DELETE';
                                goto not_ezpublish_rest_deleteTrashItem;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_deleteTrashItem')), array (  '_controller' => 'ezpublish_rest.controller.trash:deleteTrashItem',));
                        }
                        not_ezpublish_rest_deleteTrashItem:

                        // ezpublish_rest_restoreTrashItem
                        if (preg_match('#^/api/ezp/v2/content/trash/(?P<trashItemId>\\d+)$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'MOVE') {
                                $allow[] = 'MOVE';
                                goto not_ezpublish_rest_restoreTrashItem;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_restoreTrashItem')), array (  '_controller' => 'ezpublish_rest.controller.trash:restoreTrashItem',));
                        }
                        not_ezpublish_rest_restoreTrashItem:

                    }

                }

                if (0 === strpos($pathinfo, '/api/ezp/v2/content/urlwildcards')) {
                    // ezpublish_rest_listURLWildcards
                    if ($pathinfo === '/api/ezp/v2/content/urlwildcards') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_ezpublish_rest_listURLWildcards;
                        }

                        return array (  '_controller' => 'ezpublish_rest.controller.url_wildcard:listURLWildcards',  '_route' => 'ezpublish_rest_listURLWildcards',);
                    }
                    not_ezpublish_rest_listURLWildcards:

                    // ezpublish_rest_createURLWildcard
                    if ($pathinfo === '/api/ezp/v2/content/urlwildcards') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_ezpublish_rest_createURLWildcard;
                        }

                        return array (  '_controller' => 'ezpublish_rest.controller.url_wildcard:createURLWildcard',  '_route' => 'ezpublish_rest_createURLWildcard',);
                    }
                    not_ezpublish_rest_createURLWildcard:

                    // ezpublish_rest_loadURLWildcard
                    if (preg_match('#^/api/ezp/v2/content/urlwildcards/(?P<urlWildcardId>\\d+)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_ezpublish_rest_loadURLWildcard;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_loadURLWildcard')), array (  '_controller' => 'ezpublish_rest.controller.url_wildcard:loadURLWildcard',));
                    }
                    not_ezpublish_rest_loadURLWildcard:

                    // ezpublish_rest_deleteURLWildcard
                    if (preg_match('#^/api/ezp/v2/content/urlwildcards/(?P<urlWildcardId>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_ezpublish_rest_deleteURLWildcard;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_deleteURLWildcard')), array (  '_controller' => 'ezpublish_rest.controller.url_wildcard:deleteURLWildcard',));
                    }
                    not_ezpublish_rest_deleteURLWildcard:

                }

            }

            if (0 === strpos($pathinfo, '/api/ezp/v2/user')) {
                // ezpublish_rest_listPoliciesForUser
                if ($pathinfo === '/api/ezp/v2/user/policies') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_ezpublish_rest_listPoliciesForUser;
                    }

                    return array (  '_controller' => 'ezpublish_rest.controller.role:listPoliciesForUser',  '_route' => 'ezpublish_rest_listPoliciesForUser',);
                }
                not_ezpublish_rest_listPoliciesForUser:

                if (0 === strpos($pathinfo, '/api/ezp/v2/user/roles')) {
                    // ezpublish_rest_listRoles
                    if ($pathinfo === '/api/ezp/v2/user/roles') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_ezpublish_rest_listRoles;
                        }

                        return array (  '_controller' => 'ezpublish_rest.controller.role:listRoles',  '_route' => 'ezpublish_rest_listRoles',);
                    }
                    not_ezpublish_rest_listRoles:

                    // ezpublish_rest_createRole
                    if ($pathinfo === '/api/ezp/v2/user/roles') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_ezpublish_rest_createRole;
                        }

                        return array (  '_controller' => 'ezpublish_rest.controller.role:createRole',  '_route' => 'ezpublish_rest_createRole',);
                    }
                    not_ezpublish_rest_createRole:

                    // ezpublish_rest_createRoleDraft
                    if (preg_match('#^/api/ezp/v2/user/roles/(?P<roleId>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_ezpublish_rest_createRoleDraft;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_createRoleDraft')), array (  '_controller' => 'ezpublish_rest.controller.role:createRoleDraft',));
                    }
                    not_ezpublish_rest_createRoleDraft:

                    // ezpublish_rest_loadRole
                    if (preg_match('#^/api/ezp/v2/user/roles/(?P<roleId>\\d+)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_ezpublish_rest_loadRole;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_loadRole')), array (  '_controller' => 'ezpublish_rest.controller.role:loadRole',));
                    }
                    not_ezpublish_rest_loadRole:

                    // ezpublish_rest_loadRoleDraft
                    if (preg_match('#^/api/ezp/v2/user/roles/(?P<roleId>\\d+)/draft$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_ezpublish_rest_loadRoleDraft;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_loadRoleDraft')), array (  '_controller' => 'ezpublish_rest.controller.role:loadRoleDraft',));
                    }
                    not_ezpublish_rest_loadRoleDraft:

                    // ezpublish_rest_updateRole
                    if (preg_match('#^/api/ezp/v2/user/roles/(?P<roleId>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PATCH') {
                            $allow[] = 'PATCH';
                            goto not_ezpublish_rest_updateRole;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_updateRole')), array (  '_controller' => 'ezpublish_rest.controller.role:updateRole',));
                    }
                    not_ezpublish_rest_updateRole:

                    // ezpublish_rest_updateRoleDraft
                    if (preg_match('#^/api/ezp/v2/user/roles/(?P<roleId>\\d+)/draft$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PATCH') {
                            $allow[] = 'PATCH';
                            goto not_ezpublish_rest_updateRoleDraft;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_updateRoleDraft')), array (  '_controller' => 'ezpublish_rest.controller.role:updateRoleDraft',));
                    }
                    not_ezpublish_rest_updateRoleDraft:

                    // ezpublish_rest_publishRoleDraft
                    if (preg_match('#^/api/ezp/v2/user/roles/(?P<roleId>\\d+)/draft$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUBLISH') {
                            $allow[] = 'PUBLISH';
                            goto not_ezpublish_rest_publishRoleDraft;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_publishRoleDraft')), array (  '_controller' => 'ezpublish_rest.controller.role:publishRoleDraft',));
                    }
                    not_ezpublish_rest_publishRoleDraft:

                    // ezpublish_rest_deleteRole
                    if (preg_match('#^/api/ezp/v2/user/roles/(?P<roleId>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_ezpublish_rest_deleteRole;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_deleteRole')), array (  '_controller' => 'ezpublish_rest.controller.role:deleteRole',));
                    }
                    not_ezpublish_rest_deleteRole:

                    // ezpublish_rest_deleteRoleDraft
                    if (preg_match('#^/api/ezp/v2/user/roles/(?P<roleId>\\d+)/draft$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_ezpublish_rest_deleteRoleDraft;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_deleteRoleDraft')), array (  '_controller' => 'ezpublish_rest.controller.role:deleteRoleDraft',));
                    }
                    not_ezpublish_rest_deleteRoleDraft:

                    // ezpublish_rest_loadPolicies
                    if (preg_match('#^/api/ezp/v2/user/roles/(?P<roleId>\\d+)/policies$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_ezpublish_rest_loadPolicies;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_loadPolicies')), array (  '_controller' => 'ezpublish_rest.controller.role:loadPolicies',));
                    }
                    not_ezpublish_rest_loadPolicies:

                    // ezpublish_rest_addPolicy
                    if (preg_match('#^/api/ezp/v2/user/roles/(?P<roleId>\\d+)/policies$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_ezpublish_rest_addPolicy;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_addPolicy')), array (  '_controller' => 'ezpublish_rest.controller.role:addPolicy',));
                    }
                    not_ezpublish_rest_addPolicy:

                    // ezpublish_rest_deletePolicies
                    if (preg_match('#^/api/ezp/v2/user/roles/(?P<roleId>\\d+)/policies$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_ezpublish_rest_deletePolicies;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_deletePolicies')), array (  '_controller' => 'ezpublish_rest.controller.role:deletePolicies',));
                    }
                    not_ezpublish_rest_deletePolicies:

                    // ezpublish_rest_loadPolicy
                    if (preg_match('#^/api/ezp/v2/user/roles/(?P<roleId>\\d+)/policies/(?P<policyId>\\d+)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_ezpublish_rest_loadPolicy;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_loadPolicy')), array (  '_controller' => 'ezpublish_rest.controller.role:loadPolicy',));
                    }
                    not_ezpublish_rest_loadPolicy:

                    // ezpublish_rest_updatePolicy
                    if (preg_match('#^/api/ezp/v2/user/roles/(?P<roleId>\\d+)/policies/(?P<policyId>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PATCH') {
                            $allow[] = 'PATCH';
                            goto not_ezpublish_rest_updatePolicy;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_updatePolicy')), array (  '_controller' => 'ezpublish_rest.controller.role:updatePolicy',));
                    }
                    not_ezpublish_rest_updatePolicy:

                    // ezpublish_rest_deletePolicy
                    if (preg_match('#^/api/ezp/v2/user/roles/(?P<roleId>\\d+)/policies/(?P<policyId>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_ezpublish_rest_deletePolicy;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_deletePolicy')), array (  '_controller' => 'ezpublish_rest.controller.role:deletePolicy',));
                    }
                    not_ezpublish_rest_deletePolicy:

                }

                if (0 === strpos($pathinfo, '/api/ezp/v2/user/users')) {
                    // ezpublish_rest_verifyUsers
                    if ($pathinfo === '/api/ezp/v2/user/users') {
                        if ($this->context->getMethod() != 'HEAD') {
                            $allow[] = 'HEAD';
                            goto not_ezpublish_rest_verifyUsers;
                        }

                        return array (  '_controller' => 'ezpublish_rest.controller.user:verifyUsers',  '_route' => 'ezpublish_rest_verifyUsers',);
                    }
                    not_ezpublish_rest_verifyUsers:

                    // ezpublish_rest_loadUsers
                    if ($pathinfo === '/api/ezp/v2/user/users') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_ezpublish_rest_loadUsers;
                        }

                        return array (  '_controller' => 'ezpublish_rest.controller.user:loadUsers',  '_route' => 'ezpublish_rest_loadUsers',);
                    }
                    not_ezpublish_rest_loadUsers:

                    // ezpublish_rest_loadUser
                    if (preg_match('#^/api/ezp/v2/user/users/(?P<userId>\\d+)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_ezpublish_rest_loadUser;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_loadUser')), array (  '_controller' => 'ezpublish_rest.controller.user:loadUser',));
                    }
                    not_ezpublish_rest_loadUser:

                    // ezpublish_rest_updateUser
                    if (preg_match('#^/api/ezp/v2/user/users/(?P<userId>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PATCH') {
                            $allow[] = 'PATCH';
                            goto not_ezpublish_rest_updateUser;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_updateUser')), array (  '_controller' => 'ezpublish_rest.controller.user:updateUser',));
                    }
                    not_ezpublish_rest_updateUser:

                    // ezpublish_rest_deleteUser
                    if (preg_match('#^/api/ezp/v2/user/users/(?P<userId>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_ezpublish_rest_deleteUser;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_deleteUser')), array (  '_controller' => 'ezpublish_rest.controller.user:deleteUser',));
                    }
                    not_ezpublish_rest_deleteUser:

                    // ezpublish_rest_loadUserGroupsOfUser
                    if (preg_match('#^/api/ezp/v2/user/users/(?P<userId>\\d+)/groups$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_ezpublish_rest_loadUserGroupsOfUser;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_loadUserGroupsOfUser')), array (  '_controller' => 'ezpublish_rest.controller.user:loadUserGroupsOfUser',));
                    }
                    not_ezpublish_rest_loadUserGroupsOfUser:

                    // ezpublish_rest_assignUserToUserGroup
                    if (preg_match('#^/api/ezp/v2/user/users/(?P<userId>\\d+)/groups$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_ezpublish_rest_assignUserToUserGroup;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_assignUserToUserGroup')), array (  '_controller' => 'ezpublish_rest.controller.user:assignUserToUserGroup',));
                    }
                    not_ezpublish_rest_assignUserToUserGroup:

                    // ezpublish_rest_unassignUserFromUserGroup
                    if (preg_match('#^/api/ezp/v2/user/users/(?P<userId>\\d+)/groups/(?P<groupPath>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_ezpublish_rest_unassignUserFromUserGroup;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_unassignUserFromUserGroup')), array (  '_controller' => 'ezpublish_rest.controller.user:unassignUserFromUserGroup',));
                    }
                    not_ezpublish_rest_unassignUserFromUserGroup:

                    // ezpublish_rest_loadUserDrafts
                    if (preg_match('#^/api/ezp/v2/user/users/(?P<userId>\\d+)/drafts$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_ezpublish_rest_loadUserDrafts;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_loadUserDrafts')), array (  '_controller' => 'ezpublish_rest.controller.user:loadUserDrafts',));
                    }
                    not_ezpublish_rest_loadUserDrafts:

                    // ezpublish_rest_loadRoleAssignmentsForUser
                    if (preg_match('#^/api/ezp/v2/user/users/(?P<userId>\\d+)/roles$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_ezpublish_rest_loadRoleAssignmentsForUser;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_loadRoleAssignmentsForUser')), array (  '_controller' => 'ezpublish_rest.controller.role:loadRoleAssignmentsForUser',));
                    }
                    not_ezpublish_rest_loadRoleAssignmentsForUser:

                    // ezpublish_rest_assignRoleToUser
                    if (preg_match('#^/api/ezp/v2/user/users/(?P<userId>\\d+)/roles$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_ezpublish_rest_assignRoleToUser;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_assignRoleToUser')), array (  '_controller' => 'ezpublish_rest.controller.role:assignRoleToUser',));
                    }
                    not_ezpublish_rest_assignRoleToUser:

                    // ezpublish_rest_loadRoleAssignmentForUser
                    if (preg_match('#^/api/ezp/v2/user/users/(?P<userId>\\d+)/roles/(?P<roleId>\\d+)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_ezpublish_rest_loadRoleAssignmentForUser;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_loadRoleAssignmentForUser')), array (  '_controller' => 'ezpublish_rest.controller.role:loadRoleAssignmentForUser',));
                    }
                    not_ezpublish_rest_loadRoleAssignmentForUser:

                    // ezpublish_rest_unassignRoleFromUser
                    if (preg_match('#^/api/ezp/v2/user/users/(?P<userId>\\d+)/roles/(?P<roleId>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_ezpublish_rest_unassignRoleFromUser;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_unassignRoleFromUser')), array (  '_controller' => 'ezpublish_rest.controller.role:unassignRoleFromUser',));
                    }
                    not_ezpublish_rest_unassignRoleFromUser:

                }

                if (0 === strpos($pathinfo, '/api/ezp/v2/user/groups')) {
                    // ezpublish_rest_loadUserGroups
                    if ($pathinfo === '/api/ezp/v2/user/groups') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_ezpublish_rest_loadUserGroups;
                        }

                        return array (  '_controller' => 'ezpublish_rest.controller.user:loadUserGroups',  '_route' => 'ezpublish_rest_loadUserGroups',);
                    }
                    not_ezpublish_rest_loadUserGroups:

                    // ezpublish_rest_loadRootUserGroup
                    if ($pathinfo === '/api/ezp/v2/user/groups/root') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_ezpublish_rest_loadRootUserGroup;
                        }

                        return array (  '_controller' => 'ezpublish_rest.controller.user:loadRootUserGroup',  '_route' => 'ezpublish_rest_loadRootUserGroup',);
                    }
                    not_ezpublish_rest_loadRootUserGroup:

                    // ezpublish_rest_createRootUserGroup
                    if ($pathinfo === '/api/ezp/v2/user/groups/subgroups') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_ezpublish_rest_createRootUserGroup;
                        }

                        return array (  '_controller' => 'ezpublish_rest.controller.user:createUserGroup',  '_route' => 'ezpublish_rest_createRootUserGroup',);
                    }
                    not_ezpublish_rest_createRootUserGroup:

                    // ezpublish_rest_loadUserGroup
                    if (preg_match('#^/api/ezp/v2/user/groups/(?P<groupPath>[0-9/]+)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_ezpublish_rest_loadUserGroup;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_loadUserGroup')), array (  '_controller' => 'ezpublish_rest.controller.user:loadUserGroup',));
                    }
                    not_ezpublish_rest_loadUserGroup:

                    // ezpublish_rest_updateUserGroup
                    if (preg_match('#^/api/ezp/v2/user/groups/(?P<groupPath>[0-9/]+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PATCH') {
                            $allow[] = 'PATCH';
                            goto not_ezpublish_rest_updateUserGroup;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_updateUserGroup')), array (  '_controller' => 'ezpublish_rest.controller.user:updateUserGroup',));
                    }
                    not_ezpublish_rest_updateUserGroup:

                    // ezpublish_rest_deleteUserGroup
                    if (preg_match('#^/api/ezp/v2/user/groups/(?P<groupPath>[0-9/]+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_ezpublish_rest_deleteUserGroup;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_deleteUserGroup')), array (  '_controller' => 'ezpublish_rest.controller.user:deleteUserGroup',));
                    }
                    not_ezpublish_rest_deleteUserGroup:

                    // ezpublish_rest_moveUserGroup
                    if (preg_match('#^/api/ezp/v2/user/groups/(?P<groupPath>[0-9/]+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'MOVE') {
                            $allow[] = 'MOVE';
                            goto not_ezpublish_rest_moveUserGroup;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_moveUserGroup')), array (  '_controller' => 'ezpublish_rest.controller.user:moveUserGroup',));
                    }
                    not_ezpublish_rest_moveUserGroup:

                    // ezpublish_rest_loadSubUserGroups
                    if (preg_match('#^/api/ezp/v2/user/groups/(?P<groupPath>[0-9/]+)/subgroups$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_ezpublish_rest_loadSubUserGroups;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_loadSubUserGroups')), array (  '_controller' => 'ezpublish_rest.controller.user:loadSubUserGroups',));
                    }
                    not_ezpublish_rest_loadSubUserGroups:

                    // ezpublish_rest_createUserGroup
                    if (preg_match('#^/api/ezp/v2/user/groups/(?P<groupPath>[0-9/]+)/subgroups$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_ezpublish_rest_createUserGroup;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_createUserGroup')), array (  '_controller' => 'ezpublish_rest.controller.user:createUserGroup',));
                    }
                    not_ezpublish_rest_createUserGroup:

                    // ezpublish_rest_loadUsersFromGroup
                    if (preg_match('#^/api/ezp/v2/user/groups/(?P<groupPath>[0-9/]+)/users$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_ezpublish_rest_loadUsersFromGroup;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_loadUsersFromGroup')), array (  '_controller' => 'ezpublish_rest.controller.user:loadUsersFromGroup',));
                    }
                    not_ezpublish_rest_loadUsersFromGroup:

                    // ezpublish_rest_createUser
                    if (preg_match('#^/api/ezp/v2/user/groups/(?P<groupPath>[0-9/]+)/users$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_ezpublish_rest_createUser;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_createUser')), array (  '_controller' => 'ezpublish_rest.controller.user:createUser',));
                    }
                    not_ezpublish_rest_createUser:

                    // ezpublish_rest_loadRoleAssignmentsForUserGroup
                    if (preg_match('#^/api/ezp/v2/user/groups/(?P<groupPath>[0-9/]+)/roles$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_ezpublish_rest_loadRoleAssignmentsForUserGroup;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_loadRoleAssignmentsForUserGroup')), array (  '_controller' => 'ezpublish_rest.controller.role:loadRoleAssignmentsForUserGroup',));
                    }
                    not_ezpublish_rest_loadRoleAssignmentsForUserGroup:

                    // ezpublish_rest_assignRoleToUserGroup
                    if (preg_match('#^/api/ezp/v2/user/groups/(?P<groupPath>[0-9/]+)/roles$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_ezpublish_rest_assignRoleToUserGroup;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_assignRoleToUserGroup')), array (  '_controller' => 'ezpublish_rest.controller.role:assignRoleToUserGroup',));
                    }
                    not_ezpublish_rest_assignRoleToUserGroup:

                    // ezpublish_rest_loadRoleAssignmentForUserGroup
                    if (preg_match('#^/api/ezp/v2/user/groups/(?P<groupPath>[0-9/]+)/roles/(?P<roleId>\\d+)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_ezpublish_rest_loadRoleAssignmentForUserGroup;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_loadRoleAssignmentForUserGroup')), array (  '_controller' => 'ezpublish_rest.controller.role:loadRoleAssignmentForUserGroup',));
                    }
                    not_ezpublish_rest_loadRoleAssignmentForUserGroup:

                    // ezpublish_rest_unassignRoleFromUserGroup
                    if (preg_match('#^/api/ezp/v2/user/groups/(?P<groupPath>[0-9/]+)/roles/(?P<roleId>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_ezpublish_rest_unassignRoleFromUserGroup;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_unassignRoleFromUserGroup')), array (  '_controller' => 'ezpublish_rest.controller.role:unassignRoleFromUserGroup',));
                    }
                    not_ezpublish_rest_unassignRoleFromUserGroup:

                }

                if (0 === strpos($pathinfo, '/api/ezp/v2/user/sessions')) {
                    // ezpublish_rest_createSession
                    if ($pathinfo === '/api/ezp/v2/user/sessions') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_ezpublish_rest_createSession;
                        }

                        return array (  '_controller' => 'ezpublish_rest.controller.session:createSessionAction',  '_route' => 'ezpublish_rest_createSession',);
                    }
                    not_ezpublish_rest_createSession:

                    // ezpublish_rest_deleteSession
                    if (preg_match('#^/api/ezp/v2/user/sessions/(?P<sessionId>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_ezpublish_rest_deleteSession;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_deleteSession')), array (  '_controller' => 'ezpublish_rest.controller.session:deleteSessionAction',));
                    }
                    not_ezpublish_rest_deleteSession:

                    // ezpublish_rest_refreshSession
                    if (preg_match('#^/api/ezp/v2/user/sessions/(?P<sessionId>[^/]++)/refresh$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_ezpublish_rest_refreshSession;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_refreshSession')), array (  '_controller' => 'ezpublish_rest.controller.session:refreshSessionAction',));
                    }
                    not_ezpublish_rest_refreshSession:

                }

            }

            if (0 === strpos($pathinfo, '/api/ezp/v2/content')) {
                // ezpublish_rest_listGlobalURLAliases
                if ($pathinfo === '/api/ezp/v2/content/urlaliases') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_ezpublish_rest_listGlobalURLAliases;
                    }

                    return array (  '_controller' => 'ezpublish_rest.controller.url_alias:listGlobalURLAliases',  '_route' => 'ezpublish_rest_listGlobalURLAliases',);
                }
                not_ezpublish_rest_listGlobalURLAliases:

                // ezpublish_rest_listLocationURLAliases
                if (0 === strpos($pathinfo, '/api/ezp/v2/content/locations') && preg_match('#^/api/ezp/v2/content/locations/(?P<locationPath>[0-9/]+)/urlaliases$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_ezpublish_rest_listLocationURLAliases;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_listLocationURLAliases')), array (  '_controller' => 'ezpublish_rest.controller.url_alias:listLocationURLAliases',));
                }
                not_ezpublish_rest_listLocationURLAliases:

                if (0 === strpos($pathinfo, '/api/ezp/v2/content/urlaliases')) {
                    // ezpublish_rest_createURLAlias
                    if ($pathinfo === '/api/ezp/v2/content/urlaliases') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_ezpublish_rest_createURLAlias;
                        }

                        return array (  '_controller' => 'ezpublish_rest.controller.url_alias:createURLAlias',  '_route' => 'ezpublish_rest_createURLAlias',);
                    }
                    not_ezpublish_rest_createURLAlias:

                    // ezpublish_rest_loadURLAlias
                    if (preg_match('#^/api/ezp/v2/content/urlaliases/(?P<urlAliasId>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_ezpublish_rest_loadURLAlias;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_loadURLAlias')), array (  '_controller' => 'ezpublish_rest.controller.url_alias:loadURLAlias',));
                    }
                    not_ezpublish_rest_loadURLAlias:

                    // ezpublish_rest_deleteURLAlias
                    if (preg_match('#^/api/ezp/v2/content/urlaliases/(?P<urlAliasId>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_ezpublish_rest_deleteURLAlias;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_deleteURLAlias')), array (  '_controller' => 'ezpublish_rest.controller.url_alias:deleteURLAlias',));
                    }
                    not_ezpublish_rest_deleteURLAlias:

                }

            }

            // ezpublish_rest_loadCountryList
            if ($pathinfo === '/api/ezp/v2/services/countries') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ezpublish_rest_loadCountryList;
                }

                return array (  '_controller' => 'ezpublish_rest.controller.services:loadCountryList',  '_route' => 'ezpublish_rest_loadCountryList',);
            }
            not_ezpublish_rest_loadCountryList:

            // ezpublish_rest_options_
            if ($pathinfo === '/api/ezp/v2/') {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_ezpublish_rest_options_;
                }

                return array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET',  '_route' => 'ezpublish_rest_options_',);
            }
            not_ezpublish_rest_options_:

            if (0 === strpos($pathinfo, '/api/ezp/v2/content')) {
                if (0 === strpos($pathinfo, '/api/ezp/v2/content/sections')) {
                    // ezpublish_rest_options_content_sections
                    if ($pathinfo === '/api/ezp/v2/content/sections') {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_content_sections;
                        }

                        return array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET,POST',  '_route' => 'ezpublish_rest_options_content_sections',);
                    }
                    not_ezpublish_rest_options_content_sections:

                    // ezpublish_rest_options_content_sections_{sectionId}
                    if (preg_match('#^/api/ezp/v2/content/sections/(?P<sectionId>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_content_sections_sectionId;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_content_sections_{sectionId}')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET,PATCH,DELETE',));
                    }
                    not_ezpublish_rest_options_content_sections_sectionId:

                }

                if (0 === strpos($pathinfo, '/api/ezp/v2/content/objects')) {
                    // ezpublish_rest_options_content_objects
                    if ($pathinfo === '/api/ezp/v2/content/objects') {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_content_objects;
                        }

                        return array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET,POST',  '_route' => 'ezpublish_rest_options_content_objects',);
                    }
                    not_ezpublish_rest_options_content_objects:

                    // ezpublish_rest_options_content_objects_{contentId}
                    if (preg_match('#^/api/ezp/v2/content/objects/(?P<contentId>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_content_objects_contentId;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_content_objects_{contentId}')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'PATCH,GET,DELETE,COPY',));
                    }
                    not_ezpublish_rest_options_content_objects_contentId:

                    // ezpublish_rest_options_content_objects_{contentId}_relations
                    if (preg_match('#^/api/ezp/v2/content/objects/(?P<contentId>\\d+)/relations$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_content_objects_contentId_relations;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_content_objects_{contentId}_relations')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET',));
                    }
                    not_ezpublish_rest_options_content_objects_contentId_relations:

                    // ezpublish_rest_options_content_objects_{contentId}_versions
                    if (preg_match('#^/api/ezp/v2/content/objects/(?P<contentId>\\d+)/versions$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_content_objects_contentId_versions;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_content_objects_{contentId}_versions')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET',));
                    }
                    not_ezpublish_rest_options_content_objects_contentId_versions:

                    // ezpublish_rest_options_content_objects_{contentId}_versions_{versionNumber}_relations
                    if (preg_match('#^/api/ezp/v2/content/objects/(?P<contentId>\\d+)/versions/(?P<versionNumber>\\d+)/relations$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_content_objects_contentId_versions_versionNumber_relations;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_content_objects_{contentId}_versions_{versionNumber}_relations')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET,POST',));
                    }
                    not_ezpublish_rest_options_content_objects_contentId_versions_versionNumber_relations:

                    // ezpublish_rest_options_content_objects_{contentId}_versions_{versionNumber}_relations_{relationId}
                    if (preg_match('#^/api/ezp/v2/content/objects/(?P<contentId>\\d+)/versions/(?P<versionNumber>\\d+)/relations/(?P<relationId>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_content_objects_contentId_versions_versionNumber_relations_relationId;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_content_objects_{contentId}_versions_{versionNumber}_relations_{relationId}')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET,DELETE',));
                    }
                    not_ezpublish_rest_options_content_objects_contentId_versions_versionNumber_relations_relationId:

                    // ezpublish_rest_options_content_objects_{contentId}_versions_{versionNumber}
                    if (preg_match('#^/api/ezp/v2/content/objects/(?P<contentId>\\d+)/versions/(?P<versionNumber>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_content_objects_contentId_versions_versionNumber;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_content_objects_{contentId}_versions_{versionNumber}')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET,PATCH,DELETE,COPY,PUBLISH',));
                    }
                    not_ezpublish_rest_options_content_objects_contentId_versions_versionNumber:

                    // ezpublish_rest_options_content_objects_{contentId}_currentversion
                    if (preg_match('#^/api/ezp/v2/content/objects/(?P<contentId>\\d+)/currentversion$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_content_objects_contentId_currentversion;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_content_objects_{contentId}_currentversion')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET,COPY',));
                    }
                    not_ezpublish_rest_options_content_objects_contentId_currentversion:

                }

                // ezpublish_rest_options_content_binary_images_{imageId}_variations_{variationIdentifier}
                if (0 === strpos($pathinfo, '/api/ezp/v2/content/binary/images') && preg_match('#^/api/ezp/v2/content/binary/images/(?P<imageId>\\d+-\\d+(-\\d+)?)/variations/(?P<variationIdentifier>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_ezpublish_rest_options_content_binary_images_imageId_variations_variationIdentifier;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_content_binary_images_{imageId}_variations_{variationIdentifier}')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET',));
                }
                not_ezpublish_rest_options_content_binary_images_imageId_variations_variationIdentifier:

                // ezpublish_rest_options_content_views
                if ($pathinfo === '/api/ezp/v2/content/views') {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_ezpublish_rest_options_content_views;
                    }

                    return array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'POST',  '_route' => 'ezpublish_rest_options_content_views',);
                }
                not_ezpublish_rest_options_content_views:

            }

            if (0 === strpos($pathinfo, '/api/ezp/v2/views')) {
                // ezpublish_rest_options_views
                if ($pathinfo === '/api/ezp/v2/views') {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_ezpublish_rest_options_views;
                    }

                    return array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'POST,GET',  '_route' => 'ezpublish_rest_options_views',);
                }
                not_ezpublish_rest_options_views:

                // ezpublish_rest_options_views_{viewId}
                if (preg_match('#^/api/ezp/v2/views/(?P<viewId>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_ezpublish_rest_options_views_viewId;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_views_{viewId}')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET',));
                }
                not_ezpublish_rest_options_views_viewId:

                // ezpublish_rest_options_views_{viewId}_results
                if (preg_match('#^/api/ezp/v2/views/(?P<viewId>[^/]++)/results$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_ezpublish_rest_options_views_viewId_results;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_views_{viewId}_results')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET',));
                }
                not_ezpublish_rest_options_views_viewId_results:

            }

            if (0 === strpos($pathinfo, '/api/ezp/v2/content')) {
                if (0 === strpos($pathinfo, '/api/ezp/v2/content/objects')) {
                    if (0 === strpos($pathinfo, '/api/ezp/v2/content/objectstategroups')) {
                        // ezpublish_rest_options_content_objectstategroups
                        if ($pathinfo === '/api/ezp/v2/content/objectstategroups') {
                            if ($this->context->getMethod() != 'OPTIONS') {
                                $allow[] = 'OPTIONS';
                                goto not_ezpublish_rest_options_content_objectstategroups;
                            }

                            return array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET,POST',  '_route' => 'ezpublish_rest_options_content_objectstategroups',);
                        }
                        not_ezpublish_rest_options_content_objectstategroups:

                        // ezpublish_rest_options_content_objectstategroups_{objectStateGroupId}
                        if (preg_match('#^/api/ezp/v2/content/objectstategroups/(?P<objectStateGroupId>\\d+)$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'OPTIONS') {
                                $allow[] = 'OPTIONS';
                                goto not_ezpublish_rest_options_content_objectstategroups_objectStateGroupId;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_content_objectstategroups_{objectStateGroupId}')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET,PATCH,DELETE',));
                        }
                        not_ezpublish_rest_options_content_objectstategroups_objectStateGroupId:

                        // ezpublish_rest_options_content_objectstategroups_{objectStateGroupId}_objectstates
                        if (preg_match('#^/api/ezp/v2/content/objectstategroups/(?P<objectStateGroupId>\\d+)/objectstates$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'OPTIONS') {
                                $allow[] = 'OPTIONS';
                                goto not_ezpublish_rest_options_content_objectstategroups_objectStateGroupId_objectstates;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_content_objectstategroups_{objectStateGroupId}_objectstates')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET,POST',));
                        }
                        not_ezpublish_rest_options_content_objectstategroups_objectStateGroupId_objectstates:

                        // ezpublish_rest_options_content_objectstategroups_{objectStateGroupId}_objectstates_{objectStateId}
                        if (preg_match('#^/api/ezp/v2/content/objectstategroups/(?P<objectStateGroupId>\\d+)/objectstates/(?P<objectStateId>\\d+)$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'OPTIONS') {
                                $allow[] = 'OPTIONS';
                                goto not_ezpublish_rest_options_content_objectstategroups_objectStateGroupId_objectstates_objectStateId;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_content_objectstategroups_{objectStateGroupId}_objectstates_{objectStateId}')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET,PATCH,DELETE',));
                        }
                        not_ezpublish_rest_options_content_objectstategroups_objectStateGroupId_objectstates_objectStateId:

                    }

                    // ezpublish_rest_options_content_objects_{contentId}_objectstates
                    if (preg_match('#^/api/ezp/v2/content/objects/(?P<contentId>\\d+)/objectstates$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_content_objects_contentId_objectstates;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_content_objects_{contentId}_objectstates')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET,PATCH',));
                    }
                    not_ezpublish_rest_options_content_objects_contentId_objectstates:

                }

                if (0 === strpos($pathinfo, '/api/ezp/v2/content/locations')) {
                    // ezpublish_rest_options_content_locations
                    if ($pathinfo === '/api/ezp/v2/content/locations') {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_content_locations;
                        }

                        return array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET',  '_route' => 'ezpublish_rest_options_content_locations',);
                    }
                    not_ezpublish_rest_options_content_locations:

                    // ezpublish_rest_options_content_locations_{locationPath}
                    if (preg_match('#^/api/ezp/v2/content/locations/(?P<locationPath>[0-9/]+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_content_locations_locationPath;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_content_locations_{locationPath}')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET,PATCH,DELETE,COPY,MOVE,SWAP',));
                    }
                    not_ezpublish_rest_options_content_locations_locationPath:

                    // ezpublish_rest_options_content_locations_{locationPath}_children
                    if (preg_match('#^/api/ezp/v2/content/locations/(?P<locationPath>[0-9/]+)/children$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_content_locations_locationPath_children;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_content_locations_{locationPath}_children')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET',));
                    }
                    not_ezpublish_rest_options_content_locations_locationPath_children:

                }

                // ezpublish_rest_options_content_objects_{contentId}_locations
                if (0 === strpos($pathinfo, '/api/ezp/v2/content/objects') && preg_match('#^/api/ezp/v2/content/objects/(?P<contentId>\\d+)/locations$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_ezpublish_rest_options_content_objects_contentId_locations;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_content_objects_{contentId}_locations')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET,POST',));
                }
                not_ezpublish_rest_options_content_objects_contentId_locations:

                if (0 === strpos($pathinfo, '/api/ezp/v2/content/t')) {
                    if (0 === strpos($pathinfo, '/api/ezp/v2/content/type')) {
                        if (0 === strpos($pathinfo, '/api/ezp/v2/content/typegroups')) {
                            // ezpublish_rest_options_content_typegroups
                            if ($pathinfo === '/api/ezp/v2/content/typegroups') {
                                if ($this->context->getMethod() != 'OPTIONS') {
                                    $allow[] = 'OPTIONS';
                                    goto not_ezpublish_rest_options_content_typegroups;
                                }

                                return array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET,POST',  '_route' => 'ezpublish_rest_options_content_typegroups',);
                            }
                            not_ezpublish_rest_options_content_typegroups:

                            // ezpublish_rest_options_content_typegroups_{contentTypeGroupId}
                            if (preg_match('#^/api/ezp/v2/content/typegroups/(?P<contentTypeGroupId>\\d+)$#s', $pathinfo, $matches)) {
                                if ($this->context->getMethod() != 'OPTIONS') {
                                    $allow[] = 'OPTIONS';
                                    goto not_ezpublish_rest_options_content_typegroups_contentTypeGroupId;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_content_typegroups_{contentTypeGroupId}')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET,PATCH,DELETE',));
                            }
                            not_ezpublish_rest_options_content_typegroups_contentTypeGroupId:

                            // ezpublish_rest_options_content_typegroups_{contentTypeGroupId}_types
                            if (preg_match('#^/api/ezp/v2/content/typegroups/(?P<contentTypeGroupId>\\d+)/types$#s', $pathinfo, $matches)) {
                                if ($this->context->getMethod() != 'OPTIONS') {
                                    $allow[] = 'OPTIONS';
                                    goto not_ezpublish_rest_options_content_typegroups_contentTypeGroupId_types;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_content_typegroups_{contentTypeGroupId}_types')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET,POST',));
                            }
                            not_ezpublish_rest_options_content_typegroups_contentTypeGroupId_types:

                        }

                        if (0 === strpos($pathinfo, '/api/ezp/v2/content/types')) {
                            // ezpublish_rest_options_content_types
                            if ($pathinfo === '/api/ezp/v2/content/types') {
                                if ($this->context->getMethod() != 'OPTIONS') {
                                    $allow[] = 'OPTIONS';
                                    goto not_ezpublish_rest_options_content_types;
                                }

                                return array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET',  '_route' => 'ezpublish_rest_options_content_types',);
                            }
                            not_ezpublish_rest_options_content_types:

                            // ezpublish_rest_options_content_types_{contentTypeId}
                            if (preg_match('#^/api/ezp/v2/content/types/(?P<contentTypeId>\\d+)$#s', $pathinfo, $matches)) {
                                if ($this->context->getMethod() != 'OPTIONS') {
                                    $allow[] = 'OPTIONS';
                                    goto not_ezpublish_rest_options_content_types_contentTypeId;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_content_types_{contentTypeId}')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'COPY,GET,POST,DELETE',));
                            }
                            not_ezpublish_rest_options_content_types_contentTypeId:

                            // ezpublish_rest_options_content_types_{contentTypeId}_fieldDefinitions
                            if (preg_match('#^/api/ezp/v2/content/types/(?P<contentTypeId>\\d+)/fieldDefinitions$#s', $pathinfo, $matches)) {
                                if ($this->context->getMethod() != 'OPTIONS') {
                                    $allow[] = 'OPTIONS';
                                    goto not_ezpublish_rest_options_content_types_contentTypeId_fieldDefinitions;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_content_types_{contentTypeId}_fieldDefinitions')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET',));
                            }
                            not_ezpublish_rest_options_content_types_contentTypeId_fieldDefinitions:

                            // ezpublish_rest_options_content_types_{contentTypeId}_fieldDefinitions_{fieldDefinitionId}
                            if (preg_match('#^/api/ezp/v2/content/types/(?P<contentTypeId>\\d+)/fieldDefinitions/(?P<fieldDefinitionId>\\d+)$#s', $pathinfo, $matches)) {
                                if ($this->context->getMethod() != 'OPTIONS') {
                                    $allow[] = 'OPTIONS';
                                    goto not_ezpublish_rest_options_content_types_contentTypeId_fieldDefinitions_fieldDefinitionId;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_content_types_{contentTypeId}_fieldDefinitions_{fieldDefinitionId}')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET',));
                            }
                            not_ezpublish_rest_options_content_types_contentTypeId_fieldDefinitions_fieldDefinitionId:

                            // ezpublish_rest_options_content_types_{contentTypeId}_draft
                            if (preg_match('#^/api/ezp/v2/content/types/(?P<contentTypeId>\\d+)/draft$#s', $pathinfo, $matches)) {
                                if ($this->context->getMethod() != 'OPTIONS') {
                                    $allow[] = 'OPTIONS';
                                    goto not_ezpublish_rest_options_content_types_contentTypeId_draft;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_content_types_{contentTypeId}_draft')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'DELETE,GET,PATCH,PUBLISH',));
                            }
                            not_ezpublish_rest_options_content_types_contentTypeId_draft:

                            // ezpublish_rest_options_content_types_{contentTypeId}_draft_fieldDefinitions
                            if (preg_match('#^/api/ezp/v2/content/types/(?P<contentTypeId>\\d+)/draft/fieldDefinitions$#s', $pathinfo, $matches)) {
                                if ($this->context->getMethod() != 'OPTIONS') {
                                    $allow[] = 'OPTIONS';
                                    goto not_ezpublish_rest_options_content_types_contentTypeId_draft_fieldDefinitions;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_content_types_{contentTypeId}_draft_fieldDefinitions')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET,POST',));
                            }
                            not_ezpublish_rest_options_content_types_contentTypeId_draft_fieldDefinitions:

                            // ezpublish_rest_options_content_types_{contentTypeId}_draft_fieldDefinitions_{fieldDefinitionId}
                            if (preg_match('#^/api/ezp/v2/content/types/(?P<contentTypeId>\\d+)/draft/fieldDefinitions/(?P<fieldDefinitionId>\\d+)$#s', $pathinfo, $matches)) {
                                if ($this->context->getMethod() != 'OPTIONS') {
                                    $allow[] = 'OPTIONS';
                                    goto not_ezpublish_rest_options_content_types_contentTypeId_draft_fieldDefinitions_fieldDefinitionId;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_content_types_{contentTypeId}_draft_fieldDefinitions_{fieldDefinitionId}')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET,PATCH,DELETE',));
                            }
                            not_ezpublish_rest_options_content_types_contentTypeId_draft_fieldDefinitions_fieldDefinitionId:

                            // ezpublish_rest_options_content_types_{contentTypeId}_groups
                            if (preg_match('#^/api/ezp/v2/content/types/(?P<contentTypeId>\\d+)/groups$#s', $pathinfo, $matches)) {
                                if ($this->context->getMethod() != 'OPTIONS') {
                                    $allow[] = 'OPTIONS';
                                    goto not_ezpublish_rest_options_content_types_contentTypeId_groups;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_content_types_{contentTypeId}_groups')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET,POST',));
                            }
                            not_ezpublish_rest_options_content_types_contentTypeId_groups:

                            // ezpublish_rest_options_content_types_{contentTypeId}_groups_{contentTypeGroupId}
                            if (preg_match('#^/api/ezp/v2/content/types/(?P<contentTypeId>\\d+)/groups/(?P<contentTypeGroupId>\\d+)$#s', $pathinfo, $matches)) {
                                if ($this->context->getMethod() != 'OPTIONS') {
                                    $allow[] = 'OPTIONS';
                                    goto not_ezpublish_rest_options_content_types_contentTypeId_groups_contentTypeGroupId;
                                }

                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_content_types_{contentTypeId}_groups_{contentTypeGroupId}')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'DELETE',));
                            }
                            not_ezpublish_rest_options_content_types_contentTypeId_groups_contentTypeGroupId:

                        }

                    }

                    if (0 === strpos($pathinfo, '/api/ezp/v2/content/trash')) {
                        // ezpublish_rest_options_content_trash
                        if ($pathinfo === '/api/ezp/v2/content/trash') {
                            if ($this->context->getMethod() != 'OPTIONS') {
                                $allow[] = 'OPTIONS';
                                goto not_ezpublish_rest_options_content_trash;
                            }

                            return array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET,DELETE',  '_route' => 'ezpublish_rest_options_content_trash',);
                        }
                        not_ezpublish_rest_options_content_trash:

                        // ezpublish_rest_options_content_trash_{trashItemId}
                        if (preg_match('#^/api/ezp/v2/content/trash/(?P<trashItemId>\\d+)$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'OPTIONS') {
                                $allow[] = 'OPTIONS';
                                goto not_ezpublish_rest_options_content_trash_trashItemId;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_content_trash_{trashItemId}')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET,DELETE,MOVE',));
                        }
                        not_ezpublish_rest_options_content_trash_trashItemId:

                    }

                }

                if (0 === strpos($pathinfo, '/api/ezp/v2/content/urlwildcards')) {
                    // ezpublish_rest_options_content_urlwildcards
                    if ($pathinfo === '/api/ezp/v2/content/urlwildcards') {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_content_urlwildcards;
                        }

                        return array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET,POST',  '_route' => 'ezpublish_rest_options_content_urlwildcards',);
                    }
                    not_ezpublish_rest_options_content_urlwildcards:

                    // ezpublish_rest_options_content_urlwildcards_{urlWildcardId}
                    if (preg_match('#^/api/ezp/v2/content/urlwildcards/(?P<urlWildcardId>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_content_urlwildcards_urlWildcardId;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_content_urlwildcards_{urlWildcardId}')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET,DELETE',));
                    }
                    not_ezpublish_rest_options_content_urlwildcards_urlWildcardId:

                }

            }

            if (0 === strpos($pathinfo, '/api/ezp/v2/user')) {
                // ezpublish_rest_options_user_policies
                if ($pathinfo === '/api/ezp/v2/user/policies') {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_ezpublish_rest_options_user_policies;
                    }

                    return array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET',  '_route' => 'ezpublish_rest_options_user_policies',);
                }
                not_ezpublish_rest_options_user_policies:

                if (0 === strpos($pathinfo, '/api/ezp/v2/user/roles')) {
                    // ezpublish_rest_options_user_roles
                    if ($pathinfo === '/api/ezp/v2/user/roles') {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_user_roles;
                        }

                        return array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET,POST',  '_route' => 'ezpublish_rest_options_user_roles',);
                    }
                    not_ezpublish_rest_options_user_roles:

                    // ezpublish_rest_options_user_roles_{roleId}
                    if (preg_match('#^/api/ezp/v2/user/roles/(?P<roleId>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_user_roles_roleId;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_user_roles_{roleId}')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'POST,GET,PATCH,DELETE',));
                    }
                    not_ezpublish_rest_options_user_roles_roleId:

                    // ezpublish_rest_options_user_roles_{roleId}_draft
                    if (preg_match('#^/api/ezp/v2/user/roles/(?P<roleId>\\d+)/draft$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_user_roles_roleId_draft;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_user_roles_{roleId}_draft')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET,PATCH,PUBLISH,DELETE',));
                    }
                    not_ezpublish_rest_options_user_roles_roleId_draft:

                    // ezpublish_rest_options_user_roles_{roleId}_policies
                    if (preg_match('#^/api/ezp/v2/user/roles/(?P<roleId>\\d+)/policies$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_user_roles_roleId_policies;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_user_roles_{roleId}_policies')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET,POST,DELETE',));
                    }
                    not_ezpublish_rest_options_user_roles_roleId_policies:

                    // ezpublish_rest_options_user_roles_{roleId}_policies_{policyId}
                    if (preg_match('#^/api/ezp/v2/user/roles/(?P<roleId>\\d+)/policies/(?P<policyId>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_user_roles_roleId_policies_policyId;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_user_roles_{roleId}_policies_{policyId}')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET,PATCH,DELETE',));
                    }
                    not_ezpublish_rest_options_user_roles_roleId_policies_policyId:

                }

                if (0 === strpos($pathinfo, '/api/ezp/v2/user/users')) {
                    // ezpublish_rest_options_user_users
                    if ($pathinfo === '/api/ezp/v2/user/users') {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_user_users;
                        }

                        return array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'HEAD,GET',  '_route' => 'ezpublish_rest_options_user_users',);
                    }
                    not_ezpublish_rest_options_user_users:

                    // ezpublish_rest_options_user_users_{userId}
                    if (preg_match('#^/api/ezp/v2/user/users/(?P<userId>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_user_users_userId;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_user_users_{userId}')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET,PATCH,DELETE',));
                    }
                    not_ezpublish_rest_options_user_users_userId:

                    // ezpublish_rest_options_user_users_{userId}_groups
                    if (preg_match('#^/api/ezp/v2/user/users/(?P<userId>\\d+)/groups$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_user_users_userId_groups;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_user_users_{userId}_groups')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET,POST',));
                    }
                    not_ezpublish_rest_options_user_users_userId_groups:

                    // ezpublish_rest_options_user_users_{userId}_groups_{groupPath}
                    if (preg_match('#^/api/ezp/v2/user/users/(?P<userId>\\d+)/groups/(?P<groupPath>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_user_users_userId_groups_groupPath;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_user_users_{userId}_groups_{groupPath}')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'DELETE',));
                    }
                    not_ezpublish_rest_options_user_users_userId_groups_groupPath:

                    // ezpublish_rest_options_user_users_{userId}_drafts
                    if (preg_match('#^/api/ezp/v2/user/users/(?P<userId>\\d+)/drafts$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_user_users_userId_drafts;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_user_users_{userId}_drafts')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET',));
                    }
                    not_ezpublish_rest_options_user_users_userId_drafts:

                    // ezpublish_rest_options_user_users_{userId}_roles
                    if (preg_match('#^/api/ezp/v2/user/users/(?P<userId>\\d+)/roles$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_user_users_userId_roles;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_user_users_{userId}_roles')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET,POST',));
                    }
                    not_ezpublish_rest_options_user_users_userId_roles:

                    // ezpublish_rest_options_user_users_{userId}_roles_{roleId}
                    if (preg_match('#^/api/ezp/v2/user/users/(?P<userId>\\d+)/roles/(?P<roleId>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_user_users_userId_roles_roleId;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_user_users_{userId}_roles_{roleId}')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET,DELETE',));
                    }
                    not_ezpublish_rest_options_user_users_userId_roles_roleId:

                }

                if (0 === strpos($pathinfo, '/api/ezp/v2/user/groups')) {
                    // ezpublish_rest_options_user_groups
                    if ($pathinfo === '/api/ezp/v2/user/groups') {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_user_groups;
                        }

                        return array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET',  '_route' => 'ezpublish_rest_options_user_groups',);
                    }
                    not_ezpublish_rest_options_user_groups:

                    // ezpublish_rest_options_user_groups_root
                    if ($pathinfo === '/api/ezp/v2/user/groups/root') {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_user_groups_root;
                        }

                        return array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET',  '_route' => 'ezpublish_rest_options_user_groups_root',);
                    }
                    not_ezpublish_rest_options_user_groups_root:

                    // ezpublish_rest_options_user_groups_subgroups
                    if ($pathinfo === '/api/ezp/v2/user/groups/subgroups') {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_user_groups_subgroups;
                        }

                        return array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'POST',  '_route' => 'ezpublish_rest_options_user_groups_subgroups',);
                    }
                    not_ezpublish_rest_options_user_groups_subgroups:

                    // ezpublish_rest_options_user_groups_{groupPath}
                    if (preg_match('#^/api/ezp/v2/user/groups/(?P<groupPath>[0-9/]+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_user_groups_groupPath;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_user_groups_{groupPath}')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET,PATCH,DELETE,MOVE',));
                    }
                    not_ezpublish_rest_options_user_groups_groupPath:

                    // ezpublish_rest_options_user_groups_{groupPath}_subgroups
                    if (preg_match('#^/api/ezp/v2/user/groups/(?P<groupPath>[0-9/]+)/subgroups$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_user_groups_groupPath_subgroups;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_user_groups_{groupPath}_subgroups')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET,POST',));
                    }
                    not_ezpublish_rest_options_user_groups_groupPath_subgroups:

                    // ezpublish_rest_options_user_groups_{groupPath}_users
                    if (preg_match('#^/api/ezp/v2/user/groups/(?P<groupPath>[0-9/]+)/users$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_user_groups_groupPath_users;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_user_groups_{groupPath}_users')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET,POST',));
                    }
                    not_ezpublish_rest_options_user_groups_groupPath_users:

                    // ezpublish_rest_options_user_groups_{groupPath}_roles
                    if (preg_match('#^/api/ezp/v2/user/groups/(?P<groupPath>[0-9/]+)/roles$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_user_groups_groupPath_roles;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_user_groups_{groupPath}_roles')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET,POST',));
                    }
                    not_ezpublish_rest_options_user_groups_groupPath_roles:

                    // ezpublish_rest_options_user_groups_{groupPath}_roles_{roleId}
                    if (preg_match('#^/api/ezp/v2/user/groups/(?P<groupPath>[0-9/]+)/roles/(?P<roleId>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_user_groups_groupPath_roles_roleId;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_user_groups_{groupPath}_roles_{roleId}')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET,DELETE',));
                    }
                    not_ezpublish_rest_options_user_groups_groupPath_roles_roleId:

                }

                if (0 === strpos($pathinfo, '/api/ezp/v2/user/sessions')) {
                    // ezpublish_rest_options_user_sessions
                    if ($pathinfo === '/api/ezp/v2/user/sessions') {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_user_sessions;
                        }

                        return array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'POST',  '_route' => 'ezpublish_rest_options_user_sessions',);
                    }
                    not_ezpublish_rest_options_user_sessions:

                    // ezpublish_rest_options_user_sessions_{sessionId}
                    if (preg_match('#^/api/ezp/v2/user/sessions/(?P<sessionId>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_user_sessions_sessionId;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_user_sessions_{sessionId}')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'DELETE',));
                    }
                    not_ezpublish_rest_options_user_sessions_sessionId:

                    // ezpublish_rest_options_user_sessions_{sessionId}_refresh
                    if (preg_match('#^/api/ezp/v2/user/sessions/(?P<sessionId>[^/]++)/refresh$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_user_sessions_sessionId_refresh;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_user_sessions_{sessionId}_refresh')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'POST',));
                    }
                    not_ezpublish_rest_options_user_sessions_sessionId_refresh:

                }

            }

            if (0 === strpos($pathinfo, '/api/ezp/v2/content')) {
                // ezpublish_rest_options_content_locations_{locationPath}_urlaliases
                if (0 === strpos($pathinfo, '/api/ezp/v2/content/locations') && preg_match('#^/api/ezp/v2/content/locations/(?P<locationPath>[0-9/]+)/urlaliases$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'OPTIONS') {
                        $allow[] = 'OPTIONS';
                        goto not_ezpublish_rest_options_content_locations_locationPath_urlaliases;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_content_locations_{locationPath}_urlaliases')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET',));
                }
                not_ezpublish_rest_options_content_locations_locationPath_urlaliases:

                if (0 === strpos($pathinfo, '/api/ezp/v2/content/urlaliases')) {
                    // ezpublish_rest_options_content_urlaliases
                    if ($pathinfo === '/api/ezp/v2/content/urlaliases') {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_content_urlaliases;
                        }

                        return array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET,POST',  '_route' => 'ezpublish_rest_options_content_urlaliases',);
                    }
                    not_ezpublish_rest_options_content_urlaliases:

                    // ezpublish_rest_options_content_urlaliases_{urlAliasId}
                    if (preg_match('#^/api/ezp/v2/content/urlaliases/(?P<urlAliasId>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'OPTIONS') {
                            $allow[] = 'OPTIONS';
                            goto not_ezpublish_rest_options_content_urlaliases_urlAliasId;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'ezpublish_rest_options_content_urlaliases_{urlAliasId}')), array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET,DELETE',));
                    }
                    not_ezpublish_rest_options_content_urlaliases_urlAliasId:

                }

            }

            // ezpublish_rest_options_services_countries
            if ($pathinfo === '/api/ezp/v2/services/countries') {
                if ($this->context->getMethod() != 'OPTIONS') {
                    $allow[] = 'OPTIONS';
                    goto not_ezpublish_rest_options_services_countries;
                }

                return array (  '_controller' => '_ezpublish_rest.controller.options:getRouteOptions',  'allowedMethods' => 'GET',  '_route' => 'ezpublish_rest_options_services_countries',);
            }
            not_ezpublish_rest_options_services_countries:

        }

        if (0 === strpos($pathinfo, '/media/cache/resolve')) {
            // liip_imagine_filter_runtime
            if (preg_match('#^/media/cache/resolve/(?P<filter>[A-z0-9_\\-]*)/rc/(?P<hash>[^/]++)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_liip_imagine_filter_runtime;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'liip_imagine_filter_runtime')), array (  '_controller' => 'liip_imagine.controller:filterRuntimeAction',));
            }
            not_liip_imagine_filter_runtime:

            // liip_imagine_filter
            if (preg_match('#^/media/cache/resolve/(?P<filter>[A-z0-9_\\-]*)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_liip_imagine_filter;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'liip_imagine_filter')), array (  '_controller' => 'liip_imagine.controller:filterAction',));
            }
            not_liip_imagine_filter:

        }

        // ez
        if ($pathinfo === '/ez') {
            return array (  '_controller' => 'ezsystems.platformui.controller:shellAction',  '_route' => 'ez',);
        }

        // template_yui_module
        if (0 === strpos($pathinfo, '/tpl/handlebars') && preg_match('#^/tpl/handlebars/(?P<module>[^/\\.]++)\\.js$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_template_yui_module;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'template_yui_module')), array (  '_controller' => 'ezsystems.platformui.controller.template:wrapTemplateAction',  '_format' => 'js',));
        }
        not_template_yui_module:

        if (0 === strpos($pathinfo, '/pjax')) {
            // admin_dashboard
            if ($pathinfo === '/pjax/dashboard') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_admin_dashboard;
                }

                return array (  '_controller' => 'ezsystems.platformui.controller.dashboard:dashboardAction',  '_route' => 'admin_dashboard',);
            }
            not_admin_dashboard:

            if (0 === strpos($pathinfo, '/pjax/s')) {
                if (0 === strpos($pathinfo, '/pjax/systeminfo')) {
                    // admin_systeminfo
                    if ($pathinfo === '/pjax/systeminfo') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_systeminfo;
                        }

                        return array (  '_controller' => 'ezsystems.platformui.controller.systeminfo:infoAction',  '_route' => 'admin_systeminfo',);
                    }
                    not_admin_systeminfo:

                    // admin_phpinfo
                    if ($pathinfo === '/pjax/systeminfo/phpinfo') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_phpinfo;
                        }

                        return array (  '_controller' => 'ezsystems.platformui.controller.systeminfo:phpinfoAction',  '_route' => 'admin_phpinfo',);
                    }
                    not_admin_phpinfo:

                }

                if (0 === strpos($pathinfo, '/pjax/section')) {
                    // admin_sectionlist
                    if ($pathinfo === '/pjax/section/list') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_sectionlist;
                        }

                        return array (  '_controller' => 'ezsystems.platformui.controller.section:listAction',  '_route' => 'admin_sectionlist',);
                    }
                    not_admin_sectionlist:

                    // admin_sectionview
                    if (0 === strpos($pathinfo, '/pjax/section/view') && preg_match('#^/pjax/section/view/(?P<sectionId>\\d+)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_sectionview;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sectionview')), array (  '_controller' => 'ezsystems.platformui.controller.section:viewAction',));
                    }
                    not_admin_sectionview:

                    // admin_sectionedit
                    if (0 === strpos($pathinfo, '/pjax/section/edit') && preg_match('#^/pjax/section/edit(?:/(?P<sectionId>\\d+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sectionedit')), array (  '_controller' => 'ezsystems.platformui.controller.section:editAction',  'sectionId' => NULL,));
                    }

                    // admin_sectiondelete
                    if (0 === strpos($pathinfo, '/pjax/section/delete') && preg_match('#^/pjax/section/delete/(?P<sectionId>[^/]++)(?:/(?P<redirectErrorsTo>(list|view)))?$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_sectiondelete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sectiondelete')), array (  '_controller' => 'ezsystems.platformui.controller.section:deleteAction',  'redirectErrorsTo' => 'list',));
                    }
                    not_admin_sectiondelete:

                }

            }

            if (0 === strpos($pathinfo, '/pjax/language')) {
                // admin_languagelist
                if ($pathinfo === '/pjax/language/list') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_languagelist;
                    }

                    return array (  '_controller' => 'ezsystems.platformui.controller.language:listAction',  '_route' => 'admin_languagelist',);
                }
                not_admin_languagelist:

                // admin_languageview
                if (0 === strpos($pathinfo, '/pjax/language/view') && preg_match('#^/pjax/language/view/(?P<languageId>\\d+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_languageview;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_languageview')), array (  '_controller' => 'ezsystems.platformui.controller.language:viewAction',));
                }
                not_admin_languageview:

                // admin_languageedit
                if (0 === strpos($pathinfo, '/pjax/language/edit') && preg_match('#^/pjax/language/edit(?:/(?P<languageId>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_languageedit')), array (  '_controller' => 'ezsystems.platformui.controller.language:editAction',  'languageId' => NULL,));
                }

                // admin_languagedelete
                if (0 === strpos($pathinfo, '/pjax/language/delete') && preg_match('#^/pjax/language/delete/(?P<languageId>[^/]++)(?:/(?P<redirectErrorsTo>(list|view)))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_languagedelete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_languagedelete')), array (  '_controller' => 'ezsystems.platformui.controller.language:deleteAction',  'redirectErrorsTo' => 'list',));
                }
                not_admin_languagedelete:

            }

            if (0 === strpos($pathinfo, '/pjax/contenttype')) {
                // admin_contenttype
                if ($pathinfo === '/pjax/contenttype') {
                    return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'admin_contenttypeGroupList',  'permanent' => true,  '_route' => 'admin_contenttype',);
                }

                if (0 === strpos($pathinfo, '/pjax/contenttype/group')) {
                    // admin_contenttypeGroupList
                    if ($pathinfo === '/pjax/contenttype/group/list') {
                        return array (  '_controller' => 'ezsystems.platformui.controller.content_type:listContentTypeGroupsAction',  '_route' => 'admin_contenttypeGroupList',);
                    }

                    // admin_contenttypeGroupView
                    if (preg_match('#^/pjax/contenttype/group/(?P<contentTypeGroupId>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_contenttypeGroupView')), array (  '_controller' => 'ezsystems.platformui.controller.content_type:viewContentTypeGroupAction',));
                    }

                    // admin_contenttypeGroupEdit
                    if (0 === strpos($pathinfo, '/pjax/contenttype/group/edit') && preg_match('#^/pjax/contenttype/group/edit(?:/(?P<contentTypeGroupId>[^/]++))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_contenttypeGroupEdit')), array (  '_controller' => 'ezsystems.platformui.controller.content_type:editContentTypeGroupAction',  'contentTypeGroupId' => NULL,));
                    }

                    // admin_contenttypeGroupDelete
                    if (0 === strpos($pathinfo, '/pjax/contenttype/group/delete') && preg_match('#^/pjax/contenttype/group/delete/(?P<contentTypeGroupId>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_contenttypeGroupDelete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_contenttypeGroupDelete')), array (  '_controller' => 'ezsystems.platformui.controller.content_type:deleteContentTypeGroupAction',));
                    }
                    not_admin_contenttypeGroupDelete:

                }

                // admin_contenttypeView
                if (0 === strpos($pathinfo, '/pjax/contenttype/view') && preg_match('#^/pjax/contenttype/view/(?P<contentTypeId>[^/]++)(?:/(?P<languageCode>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_contenttypeView')), array (  '_controller' => 'ezsystems.platformui.controller.content_type:viewContentTypeAction',  'languageCode' => NULL,));
                }

                // admin_contenttypeCreate
                if (0 === strpos($pathinfo, '/pjax/contenttype/create') && preg_match('#^/pjax/contenttype/create/(?P<contentTypeGroupId>[^/]++)(?:/(?P<languageCode>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_contenttypeCreate;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_contenttypeCreate')), array (  '_controller' => 'ezsystems.platformui.controller.content_type:createContentTypeAction',  'languageCode' => NULL,));
                }
                not_admin_contenttypeCreate:

                // admin_contenttypeUpdate
                if (0 === strpos($pathinfo, '/pjax/contenttype/update') && preg_match('#^/pjax/contenttype/update/(?P<contentTypeId>[^/]++)(?:/(?P<languageCode>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_contenttypeUpdate')), array (  '_controller' => 'ezsystems.platformui.controller.content_type:updateContentTypeAction',  'languageCode' => NULL,));
                }

                // admin_contenttypeDelete
                if (0 === strpos($pathinfo, '/pjax/contenttype/delete') && preg_match('#^/pjax/contenttype/delete/(?P<contentTypeId>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_contenttypeDelete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_contenttypeDelete')), array (  '_controller' => 'ezsystems.platformui.controller.content_type:deleteContentTypeAction',));
                }
                not_admin_contenttypeDelete:

            }

            if (0 === strpos($pathinfo, '/pjax/role')) {
                // admin_role
                if ($pathinfo === '/pjax/role') {
                    return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'admin_roleList',  'permanent' => true,  '_route' => 'admin_role',);
                }

                // admin_roleList
                if ($pathinfo === '/pjax/role/list') {
                    return array (  '_controller' => 'ezsystems.platformui.controller.role:listRolesAction',  '_route' => 'admin_roleList',);
                }

                // admin_roleView
                if (0 === strpos($pathinfo, '/pjax/role/view') && preg_match('#^/pjax/role/view/(?P<roleId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_roleView')), array (  '_controller' => 'ezsystems.platformui.controller.role:viewRoleAction',));
                }

                // admin_roleCreate
                if ($pathinfo === '/pjax/role/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_roleCreate;
                    }

                    return array (  '_controller' => 'ezsystems.platformui.controller.role:createRoleAction',  '_route' => 'admin_roleCreate',);
                }
                not_admin_roleCreate:

                // admin_roleUpdate
                if (0 === strpos($pathinfo, '/pjax/role/update') && preg_match('#^/pjax/role/update/(?P<roleId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_roleUpdate')), array (  '_controller' => 'ezsystems.platformui.controller.role:updateRoleAction',));
                }

                // admin_roleDelete
                if (0 === strpos($pathinfo, '/pjax/role/delete') && preg_match('#^/pjax/role/delete/(?P<roleId>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_roleDelete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_roleDelete')), array (  '_controller' => 'ezsystems.platformui.controller.role:deleteRoleAction',));
                }
                not_admin_roleDelete:

                if (0 === strpos($pathinfo, '/pjax/role/policy')) {
                    // admin_policyDelete
                    if (0 === strpos($pathinfo, '/pjax/role/policy/delete') && preg_match('#^/pjax/role/policy/delete/(?P<roleId>[^/]++)/(?P<policyId>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_policyDelete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_policyDelete')), array (  '_controller' => 'ezsystems.platformui.controller.role:deletePolicyAction',));
                    }
                    not_admin_policyDelete:

                    // admin_policyEdit
                    if (preg_match('#^/pjax/role/policy/(?P<roleId>[^/]++)(?:/(?P<policyId>[^/]++))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_policyEdit')), array (  '_controller' => 'ezsystems.platformui.controller.role:editPolicyAction',  'policyId' => NULL,));
                    }

                }

                // admin_roleAssignmentDelete
                if (0 === strpos($pathinfo, '/pjax/role/deleteroleassignment') && preg_match('#^/pjax/role/deleteroleassignment/(?P<roleAssignmentId>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_roleAssignmentDelete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_roleAssignmentDelete')), array (  '_controller' => 'ezsystems.platformui.controller.role:deleteRoleAssignmentAction',));
                }
                not_admin_roleAssignmentDelete:

                // admin_roleAssignSection
                if (0 === strpos($pathinfo, '/pjax/role/assignrolebysection') && preg_match('#^/pjax/role/assignrolebysection/(?P<roleId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_roleAssignSection')), array (  '_controller' => 'ezsystems.platformui.controller.role:assignRoleBySectionLimitationAction',));
                }

            }

        }

        // yui_combo_loader
        if ($pathinfo === '/_ezcombo') {
            return array (  '_controller' => 'ezsystems.platformui.controller:combineLoaderAction',  '_route' => 'yui_combo_loader',);
        }

        // bazinga_jstranslation_js
        if (0 === strpos($pathinfo, '/translations') && preg_match('#^/translations(?:/(?P<domain>[\\w]+)(?:\\.(?P<_format>js|json))?)?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_bazinga_jstranslation_js;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'bazinga_jstranslation_js')), array (  '_controller' => 'bazinga.jstranslation.controller:getTranslationsAction',  'domain' => 'messages',  '_format' => 'js',));
        }
        not_bazinga_jstranslation_js:

        // ez_content_create_no_draft
        if (0 === strpos($pathinfo, '/content/create/nodraft') && preg_match('#^/content/create/nodraft/(?P<contentTypeIdentifier>[^/]++)/(?P<language>[^/]++)/(?P<parentLocationId>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ez_content_create_no_draft')), array (  '_controller' => 'ez_content_edit:createWithoutDraftAction',));
        }

        if (0 === strpos($pathinfo, '/register')) {
            // ez_user_register
            if ($pathinfo === '/register') {
                return array (  '_controller' => 'ezrepoforms.controller.user_register:registerAction',  '_route' => 'ez_user_register',);
            }

            // ez_user_register_confirmation
            if ($pathinfo === '/register-confirm') {
                return array (  '_controller' => 'ezrepoforms.controller.user_register:registerConfirmAction',  '_route' => 'ez_user_register_confirmation',);
            }

        }

        if (0 === strpos($pathinfo, '/api/ezp/v2')) {
            // contentonthefly.location_controller.suggested
            if (0 === strpos($pathinfo, '/api/ezp/v2/contentonthefly/locations') && preg_match('#^/api/ezp/v2/contentonthefly/locations/(?P<contentTypeIdentifier>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_contentontheflylocation_controllersuggested;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'contentonthefly.location_controller.suggested')), array (  '_controller' => 'contentonthefly.controller.location:suggestedAction',));
            }
            not_contentontheflylocation_controllersuggested:

            // ez_systems.multifile_upload.controller.rest.check_permission
            if (0 === strpos($pathinfo, '/api/ezp/v2/multifileupload/v1/check-permission') && preg_match('#^/api/ezp/v2/multifileupload/v1/check\\-permission/(?P<parentLocationId>\\d+)/(?P<contentTypeId>\\d+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ez_systemsmultifile_uploadcontrollerrestcheck_permission;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ez_systems.multifile_upload.controller.rest.check_permission')), array (  '_controller' => 'ez_systems.multifile_upload.controller.rest:checkPermission',));
            }
            not_ez_systemsmultifile_uploadcontrollerrestcheck_permission:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
