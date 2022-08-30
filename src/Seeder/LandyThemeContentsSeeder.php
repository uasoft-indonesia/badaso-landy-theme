<?php

namespace Database\Seeders\Badaso\LandyTheme;

use Exception;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Uasoft\Badaso\Module\Content\Models\Content;

class LandyThemeContentsSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     *
     * @throws Exception
     */
    public function run()
    {
        \DB::beginTransaction();
        try {
            $contents = [
                0 => [
                    'slug' => 'landy',
                    'label' => 'Landy',
                    'value' => '{"navbar": {
                "name": "navbar",
                "label": "Navbar",
                "type": "group",
                "data": {
                    "logo": {
                        "name": "logo",
                        "label": "logo",
                        "type": "image",
                        "data": "photos/1/Full-logo-badaso-1.png"
                    },
                    "listnavbar": {
                        "name": "listnavbar",
                        "label": "List Navbar",
                        "type": "group",
                        "data": {
                            "home": {
                                "name": "home",
                                "label": "Home",
                                "type": "url",
                                "data": {
                                    "url": "#",
                                    "text": "Home"
                                }
                            },
                            "services": {
                                "name": "services",
                                "label": "Services",
                                "type": "url",
                                "data": {
                                    "url": "#",
                                    "text": "Services"
                                }
                            },
                            "portfolio": {
                                "name": "portfolio",
                                "label": "Portfolio",
                                "type": "url",
                                "data": {
                                    "url": "#",
                                    "text": "Portfolio"
                                }
                            },
                            "pricing": {
                                "name": "pricing",
                                "label": "Pricing",
                                "type": "url",
                                "data": {
                                    "url": "#",
                                    "text": "Pricing"
                                }
                            },
                            "team": {
                                "name": "team",
                                "label": "Team",
                                "type": "url",
                                "data": {
                                    "url": "#",
                                    "text": "Team"
                                }
                            },
                            "contact": {
                                "name": "contact",
                                "label": "Contact",
                                "type": "url",
                                "data": {
                                    "url": "#",
                                    "text": "Contact"
                                }
                            }
                        }
                    }
                }
            },
             "landingpage": {
                "name": "landingpage",
                "label": "Landing Page",
                "type": "group",
                "data": {
                    "title": {
                        "name": "title",
                        "label": "Title",
                        "type": "text",
                        "data": "Official Bussiness Landing Page by Badaso"
                    },
                    "description": {
                        "name": "description",
                        "label": "Description",
                        "type": "text",
                        "data": "We are a digital agency that helps brands to achieve their business outcomes. We see technology as a tool to create amazing things."
                    },
                    "image": {
                        "name": "image",
                        "label": "Image Landing Page",
                        "type": "image",
                        "data": "photos/1/hero-image.jpeg"
                    }
                }
            },
             "storycontent": {
                "name": "storycontent",
                "label": "Story Content",
                "type": "group",
                "data": {
                    "image": {
                        "name": "image",
                        "label": "Image Story",
                        "type": "image",
                        "data": "photos/1/about-img1.jpeg"
                    },
                    "title": {
                        "name": "title",
                        "label": "Title",
                        "type": "text",
                        "data": "OUR STORY"
                    },
                    "subtitle": {
                        "name": "subtitle",
                        "label": "Subtitle",
                        "type": "text",
                        "data": "Our team comes with the experience and knowledge"
                    },
                    "listtab": {
                        "name": "listtab",
                        "label": "List Tab",
                        "type": "group",
                        "data": {
                            "tabdescription1": {
                                "name": "tabdescription1",
                                "label": "Tab Description 1",
                                "type": "text",
                                "data": "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, look like readable English."
                            },
                            "tabdescription2": {
                                "name": "tabdescription2",
                                "label": "Tab Description 2",
                                "type": "text",
                                "data": "There are many variations of passages of Lorem Ipsum available, but the majority have in some form, by injected humour."
                            },
                            "tabdescription3": {
                                "name": "tabdescription3",
                                "label": "Tab Description 3",
                                "type": "text",
                                "data": "There are many variations of passages of Lorem Ipsum available, but the majority have in some form, by injected humour."
                            }
                        }
                    }
                }
            },
            "service": {
                "name": "service",
                "label": "Services Content",
                "type": "group",
                "data": {
                    "title": {
                        "name": "title",
                        "label": "Title",
                        "type": "text",
                        "data": "Services"
                    },
                    "subtitle": {
                        "name": "subtitle",
                        "label": "Subtitle",
                        "type": "text",
                        "data": "Our Best Services"
                    },
                    "description": {
                        "name": "description",
                        "label": "Description",
                        "type": "text",
                        "data": "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form."
                    },
                    "listservice": {
                        "name": "listservice",
                        "label": "List Service",
                        "type": "group",
                        "data": {
                            "service1": {
                                "name": "service1",
                                "label": "Service 1",
                                "type": "group",
                                "data": {
                                    "title": {
                                        "name": "title",
                                        "label": "Title",
                                        "type": "text",
                                        "data": "Refreshing Design"
                                    },
                                    "description": {
                                        "name": "description",
                                        "label": "Description",
                                        "type": "text",
                                        "data": "Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt labor dolore magna."
                                    },
                                    "logo": {
                                        "name": "logo",
                                        "label": "logo",
                                        "type": "image",
                                        "data": "photos/1/capsule.png"
                                    }
                                }
                            },
                            "service2": {
                                "name": "service2",
                                "label": "Service 2",
                                "type": "group",
                                "data": {
                                    "title": {
                                        "name": "title",
                                        "label": "Title",
                                        "type": "text",
                                        "data": "Solid Tailwind CSS"
                                    },
                                    "description": {
                                        "name": "description",
                                        "label": "Description",
                                        "type": "text",
                                        "data": "Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt labor dolore magna."
                                    },
                                    "logo": {
                                        "name": "logo",
                                        "label": "logo",
                                        "type": "image",
                                        "data": "photos/1/tailwindcss.svg"
                                    }
                                }
                            },
                            "service3": {
                                "name": "service3",
                                "label": "Service 3",
                                "type": "group",
                                "data": {
                                    "title": {
                                        "name": "title",
                                        "label": "Title",
                                        "type": "text",
                                        "data": "100+ Components"
                                    },
                                    "description": {
                                        "name": "description",
                                        "label": "Description",
                                        "type": "text",
                                        "data": "Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt labor dolore magna."
                                    },
                                    "logo": {
                                        "name": "logo",
                                        "label": "logo",
                                        "type": "image",
                                        "data": "photos/1/shortcode.svg"
                                    }
                                }
                            },
                            "service4": {
                                "name": "service4",
                                "label": "Service 4",
                                "type": "group",
                                "data": {
                                    "title": {
                                        "name": "title",
                                        "label": "Title",
                                        "type": "text",
                                        "data": "Speed Optimized"
                                    },
                                    "description": {
                                        "name": "description",
                                        "label": "Description",
                                        "type": "text",
                                        "data": "Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt labor dolore magna."
                                    },
                                    "logo": {
                                        "name": "logo",
                                        "label": "logo",
                                        "type": "image",
                                        "data": "photos/1/dashboard.svg"
                                    }
                                }
                            },
                            "service5": {
                                "name": "service5",
                                "label": "Service 5",
                                "type": "group",
                                "data": {
                                    "title": {
                                        "name": "title",
                                        "label": "Title",
                                        "type": "text",
                                        "data": "Fully Customizable"
                                    },
                                    "description": {
                                        "name": "description",
                                        "label": "Description",
                                        "type": "text",
                                        "data": "Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt labor dolore magna."
                                    },
                                    "logo": {
                                        "name": "logo",
                                        "label": "logo",
                                        "type": "image",
                                        "data": "photos/1/layers.svg"
                                    }
                                }
                            },
                            "service6": {
                                "name": "service6",
                                "label": "Service 6",
                                "type": "group",
                                "data": {
                                    "title": {
                                        "name": "title",
                                        "label": "Title",
                                        "type": "text",
                                        "data": "Regular Updates"
                                    },
                                    "description": {
                                        "name": "description",
                                        "label": "Description",
                                        "type": "text",
                                        "data": "Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt labor dolore magna."
                                    },
                                    "logo": {
                                        "name": "logo",
                                        "label": "logo",
                                        "type": "image",
                                        "data": "photos/1/refresh.svg"
                                    }
                                }
                            }
                        }
                    }
                }
            },
               "video": {
                "name": "video",
                "label": "Video Content",
                "type": "group",
                "data": {
                    "title": {
                        "name": "title",
                        "label": "Title",
                        "type": "text",
                        "data": "Our Intro Video"
                    },
                    "subtitle": {
                        "name": "subtitle",
                        "label": "Subtitle",
                        "type": "text",
                        "data": "Watch Our Promo Video"
                    },
                    "description": {
                        "name": "description",
                        "label": "Description",
                        "type": "text",
                        "data": "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form."
                    },
                    "linkvideo": {
                        "name": "linkvideo",
                        "label": "Link Video",
                        "type": "url",
                        "data": {
                            "url": "#",
                            "text": "Video"
                        }
                    }
                }
            },
             "portfolio": {
                "name": "portfolio",
                "label": "Portfolio Content",
                "type": "group",
                "data": {
                    "title": {
                        "name": "title",
                        "label": "Title",
                        "type": "text",
                        "data": "Our Portfolio"
                    },
                    "subtitle": {
                        "name": "subtitle",
                        "label": "Subtitle",
                        "type": "text",
                        "data": "Our Recent Works"
                    },
                    "description": {
                        "name": "description",
                        "label": "Description",
                        "type": "text",
                        "data": "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form."
                    },
                    "listtabtitle": {
                        "name": "listtabtitle",
                        "label": "List Tab Title",
                        "type": "group",
                        "data": {
                            "title1": {
                                "name": "title1",
                                "label": "Title 1",
                                "type": "text",
                                "data": "All Work"
                            },
                            "title2": {
                                "name": "title2",
                                "label": "Title 2",
                                "type": "text",
                                "data": "Branding"
                            },
                            "title3": {
                                "name": "title3",
                                "label": "Title 3",
                                "type": "text",
                                "data": "Marketing"
                            },
                            "title4": {
                                "name": "title4",
                                "label": "Title 4",
                                "type": "text",
                                "data": "Planning"
                            },
                            "title5": {
                                "name": "title5",
                                "label": "Title 5",
                                "type": "text",
                                "data": "Research"
                            }
                        }
                    },
                    "listtabportfolio": {
                        "name": "listtabportfolio",
                        "label": "List Tab Portfolio",
                        "type": "group",
                        "data": {
                            "portfolio1": {
                                "name": "portfolio1",
                                "label": "Portfolio 1",
                                "type": "group",
                                "data": {
                                    "image": {
                                        "name": "image",
                                        "label": "Image",
                                        "type": "image",
                                        "data": "photos/1/pf1.jpeg"
                                    },
                                    "title": {
                                        "name": "title",
                                        "label": "Title",
                                        "type": "text",
                                        "data": "Graphics Design"
                                    },
                                    "description": {
                                        "name": "description",
                                        "label": "Description",
                                        "type": "text",
                                        "data": "Short description for the ones who look for something new. Awesome!"
                                    }
                                }
                            },
                            "portfolio2": {
                                "name": "portfolio2",
                                "label": "Portfolio 2",
                                "type": "group",
                                "data": {
                                    "image": {
                                        "name": "image",
                                        "label": "Image",
                                        "type": "image",
                                        "data": "photos/1/pf2.jpeg"
                                    },
                                    "title": {
                                        "name": "title",
                                        "label": "Title",
                                        "type": "text",
                                        "data": "Web Development"
                                    },
                                    "description": {
                                        "name": "description",
                                        "label": "Description",
                                        "type": "text",
                                        "data": "Short description for the ones who look for something new. Awesome!"
                                    }
                                }
                            },
                            "portfolio3": {
                                "name": "portfolio3",
                                "label": "Portfolio 3",
                                "type": "group",
                                "data": {
                                    "image": {
                                        "name": "image",
                                        "label": "Image",
                                        "type": "image",
                                        "data": "photos/1/pf3.jpeg"
                                    },
                                    "title": {
                                        "name": "title",
                                        "label": "Title",
                                        "type": "text",
                                        "data": "App Development"
                                    },
                                    "description": {
                                        "name": "description",
                                        "label": "Description",
                                        "type": "text",
                                        "data": "Short description for the ones who look for something new. Awesome!"
                                    }
                                }
                            }
                        }
                    }
                }
            },
             "pricing": {
                "name": "pricing",
                "label": "Pricing Content",
                "type": "group",
                "data": {
                    "title": {
                        "name": "title",
                        "label": "Title",
                        "type": "text",
                        "data": "Pricing"
                    },
                    "subtitle": {
                        "name": "subtitle",
                        "label": "Subtitle",
                        "type": "text",
                        "data": "Pricing & Plans"
                    },
                    "description": {
                        "name": "description",
                        "label": "Description",
                        "type": "text",
                        "data": "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form."
                    },
                    "listprice": {
                        "name": "listprice",
                        "label": "List Price",
                        "type": "group",
                        "data": {
                            "price1": {
                                "name": "price1",
                                "label": "Price 1",
                                "type": "group",
                                "data": {
                                    "title": {
                                        "name": "title",
                                        "label": "Title",
                                        "type": "text",
                                        "data": "Starter"
                                    },
                                    "description": {
                                        "name": "description",
                                        "label": "Description",
                                        "type": "text",
                                        "data": "Lorem Ipsum is simply dummy text of the printing and industry."
                                    },
                                    "price": {
                                        "name": "price",
                                        "label": "Price",
                                        "type": "text",
                                        "data": "0"
                                    },
                                    "specification": {
                                        "name": "specification",
                                        "label": "Specification",
                                        "type": "group",
                                        "data": {
                                            "text1": {
                                                "name": "text1",
                                                "label": "Text 1",
                                                "type": "text",
                                                "data": "Cras justo odio."
                                            },
                                            "text2": {
                                                "name": "text2",
                                                "label": "Text 2",
                                                "type": "text",
                                                "data": "Dapibus ac facilisis in."
                                            },
                                            "text3": {
                                                "name": "text3",
                                                "label": "Text 3",
                                                "type": "text",
                                                "data": "Morbi leo risus."
                                            },
                                            "text4": {
                                                "name": "text4",
                                                "label": "Text 4",
                                                "type": "text",
                                                "data": "Excepteur sint occaecat velit."
                                            }
                                        }
                                    }
                                }
                            },
                            "price2": {
                                "name": "price2",
                                "label": "Price 2",
                                "type": "group",
                                "data": {
                                    "title": {
                                        "name": "title",
                                        "label": "Title",
                                        "type": "text",
                                        "data": "Exclusive"
                                    },
                                    "description": {
                                        "name": "description",
                                        "label": "Description",
                                        "type": "text",
                                        "data": "Lorem Ipsum is simply dummy text of the printing and industry."
                                    },
                                    "price": {
                                        "name": "price",
                                        "label": "Price",
                                        "type": "text",
                                        "data": "99"
                                    },
                                    "specification": {
                                        "name": "specification",
                                        "label": "Specification",
                                        "type": "group",
                                        "data": {
                                            "text1": {
                                                "name": "text1",
                                                "label": "Text 1",
                                                "type": "text",
                                                "data": "Cras justo odio."
                                            },
                                            "text2": {
                                                "name": "text2",
                                                "label": "Text 2",
                                                "type": "text",
                                                "data": "Dapibus ac facilisis in."
                                            },
                                            "text3": {
                                                "name": "text3",
                                                "label": "Text 3",
                                                "type": "text",
                                                "data": "Morbi leo risus."
                                            },
                                            "text4": {
                                                "name": "text4",
                                                "label": "Text 4",
                                                "type": "text",
                                                "data": "Excepteur sint occaecat velit."
                                            }
                                        }
                                    }
                                }
                            },
                            "price3": {
                                "name": "price3",
                                "label": "Price 3",
                                "type": "group",
                                "data": {
                                    "title": {
                                        "name": "title",
                                        "label": "Title",
                                        "type": "text",
                                        "data": "Premium"
                                    },
                                    "description": {
                                        "name": "description",
                                        "label": "Description",
                                        "type": "text",
                                        "data": "Lorem Ipsum is simply dummy text of the printing and industry."
                                    },
                                    "price": {
                                        "name": "price",
                                        "label": "Price",
                                        "type": "text",
                                        "data": "150"
                                    },
                                    "specification": {
                                        "name": "specification",
                                        "label": "Specification",
                                        "type": "group",
                                        "data": {
                                            "text1": {
                                                "name": "text1",
                                                "label": "Text 1",
                                                "type": "text",
                                                "data": "Cras justo odio."
                                            },
                                            "text2": {
                                                "name": "text2",
                                                "label": "Text 2",
                                                "type": "text",
                                                "data": "Dapibus ac facilisis in."
                                            },
                                            "text3": {
                                                "name": "text3",
                                                "label": "Text 3",
                                                "type": "text",
                                                "data": "Morbi leo risus."
                                            },
                                            "text4": {
                                                "name": "text4",
                                                "label": "Text 4",
                                                "type": "text",
                                                "data": "Excepteur sint occaecat velit."
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            },
             "team": {
                "name": "team",
                "label": "Team Content",
                "type": "group",
                "data": {
                    "title": {
                        "name": "title",
                        "label": "Title",
                        "type": "text",
                        "data": "Our Team"
                    },
                    "subtitle": {
                        "name": "subtitle",
                        "label": "Subtitle",
                        "type": "text",
                        "data": "Our Creative Team"
                    },
                    "description": {
                        "name": "description",
                        "label": "Description",
                        "type": "text",
                        "data": "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form."
                    },
                    "listteam": {
                        "name": "listteam",
                        "label": "List Team",
                        "type": "group",
                        "data": {
                            "team1": {
                                "name": "team1",
                                "label": "Team 1",
                                "type": "group",
                                "data": {
                                    "avatar": {
                                        "name": "avatar",
                                        "label": "Avatar",
                                        "type": "image",
                                        "data": "photos/1/team-1.jpeg"
                                    },
                                    "name": {
                                        "name": "name",
                                        "label": "Name",
                                        "type": "text",
                                        "data": "Jeffery Riley"
                                    },
                                    "position": {
                                        "name": "position",
                                        "label": "Position",
                                        "type": "text",
                                        "data": "Art Director"
                                    }
                                }
                            },
                            "team2": {
                                "name": "team2",
                                "label": "Team 2",
                                "type": "group",
                                "data": {
                                    "avatar": {
                                        "name": "avatar",
                                        "label": "Avatar",
                                        "type": "image",
                                        "data": "photos/1/team-2.jpeg"
                                    },
                                    "name": {
                                        "name": "name",
                                        "label": "Name",
                                        "type": "text",
                                        "data": "Riley Beata"
                                    },
                                    "position": {
                                        "name": "position",
                                        "label": "Position",
                                        "type": "text",
                                        "data": "Web Developer"
                                    }
                                }
                            },
                            "team3": {
                                "name": "team3",
                                "label": "Team 3",
                                "type": "group",
                                "data": {
                                    "avatar": {
                                        "name": "avatar",
                                        "label": "Avatar",
                                        "type": "image",
                                        "data": "photos/1/team-3.jpeg"
                                    },
                                    "name": {
                                        "name": "name",
                                        "label": "Name",
                                        "type": "text",
                                        "data": "Mark Alone"
                                    },
                                    "position": {
                                        "name": "position",
                                        "label": "Position",
                                        "type": "text",
                                        "data": "UX Designer"
                                    }
                                }
                            }
                        }
                    }
                }
            },
            "information": {
                "name": "information",
                "label": "Call Action Content",
                "type": "group",
                "data": {
                    "title": {
                        "name": "title",
                        "label": "Title",
                        "type": "text",
                        "data": "We love to make perfect solutions for your business"
                    },
                    "description": {
                        "name": "description",
                        "label": "Description",
                        "type": "text",
                        "data": "Why I say old chap that is, spiffing off his nut cor blimey guvnords geeza bloke knees up bobby, sloshed arse William cack Richard. Bloke fanny around chesed of bum bag old lost the pilot say there spiffing off his nut."
                    }
                }
            },
              "review": {
                "name": "review",
                "label": "Review Content",
                "type": "group",
                "data": {
                    "title": {
                        "name": "title",
                        "label": "Title",
                        "type": "text",
                        "data": "Customer Reviews"
                    },
                    "subtitle": {
                        "name": "subtitle",
                        "label": "Subtitle",
                        "type": "text",
                        "data": "Our Testimonials"
                    },
                    "description": {
                        "name": "description",
                        "label": "Description",
                        "type": "text",
                        "data": "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form."
                    },
                    "listreview": {
                        "name": "listreview",
                        "label": "List Review",
                        "type": "group",
                        "data": {
                            "review1": {
                                "name": "review1",
                                "label": "Review 1",
                                "type": "group",
                                "data": {
                                    "avatar": {
                                        "name": "avatar",
                                        "label": "avatar",
                                        "type": "image",
                                        "data": "photos/1/author-1.jpeg"
                                    },
                                    "name": {
                                        "name": "name",
                                        "label": "name",
                                        "type": "text",
                                        "data": "Musharof Chowdhury"
                                    },
                                    "position": {
                                        "name": "position",
                                        "label": "position",
                                        "type": "text",
                                        "data": "Web Entrepreneur"
                                    },
                                    "content": {
                                        "name": "content",
                                        "label": "content review",
                                        "type": "text",
                                        "data": "On the other hand denoun with righteous and disliks men who are beguiled demorae momentc blinded by desire that can"
                                    }
                                }
                            },
                            "review2": {
                                "name": "review2",
                                "label": "Review 2",
                                "type": "group",
                                "data": {
                                    "avatar": {
                                        "name": "avatar",
                                        "label": "avatar",
                                        "type": "image",
                                        "data": "photos/1/author-4.jpeg"
                                    },
                                    "name": {
                                        "name": "name",
                                        "label": "name",
                                        "type": "text",
                                        "data": "David Warner"
                                    },
                                    "position": {
                                        "name": "position",
                                        "label": "position",
                                        "type": "text",
                                        "data": "Web Developer"
                                    },
                                    "content": {
                                        "name": "content",
                                        "label": "content review",
                                        "type": "text",
                                        "data": "On the other hand denoun with righteous and disliks men who are beguiled demorae momentc blinded by desire that can"
                                    }
                                }
                            },
                            "review3": {
                                "name": "review3",
                                "label": "Review 3",
                                "type": "group",
                                "data": {
                                    "avatar": {
                                        "name": "avatar",
                                        "label": "avatar",
                                        "type": "image",
                                        "data": "photos/1/author-5.jpeg"
                                    },
                                    "name": {
                                        "name": "name",
                                        "label": "name",
                                        "type": "text",
                                        "data": "Jems Gilario"
                                    },
                                    "position": {
                                        "name": "position",
                                        "label": "position",
                                        "type": "text",
                                        "data": "Graphic Designer"
                                    },
                                    "content": {
                                        "name": "content",
                                        "label": "content review",
                                        "type": "text",
                                        "data": "On the other hand denoun with righteous and disliks men who are beguiled demorae momentc blinded by desire that can"
                                    }
                                }
                            }
                        }
                    }
                }
            },
            "news": { "name": "news",
                "label": "Latest News",
                "type": "group",
                "data":{
                    "title": {
                        "name": "title",
                        "label": "title",
                        "type": "text",
                        "data": "latest news"
                    },
                     "subtitle": {
                        "name": "subtitle",
                        "label": "subtitle",
                        "type": "text",
                        "data": "Latest News & Blog"
                    },
                     "description": {
                        "name": "description",
                        "label": "description",
                        "type": "text",
                        "data": "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form."
                    },
                    "listnews": {
                        "name": "listnews",
                        "label": "list news",
                        "type": "group",
                        "data":{
                             "news1": {
                                "name": "news1",
                                "label": "news 1",
                                "type": "group",
                                "data":{
                                     "image": {
                                        "name": "image",
                                        "label": "image news 1",
                                        "type": "image",
                                        "data": "photos/1/news-1.jpeg"
                                    },
                                     "title": {
                                        "name": "title",
                                        "label": "title",
                                        "type": "text",
                                        "data": "Make your team a Design driven company"
                                    },
                                     "description": {
                                        "name": "description",
                                        "label": "description",
                                        "type": "text",
                                        "data": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard"
                                    }
                                }
                             },
                              "news2": {
                                "name": "news2",
                                "label": "news 2",
                                "type": "group",
                                "data": {
                                    "title": {
                                        "name": "title",
                                        "label": "title",
                                        "type": "text",
                                        "data": "The newest web framework that changed the world"
                                    },
                                    "description": {
                                        "name": "description",
                                        "label": "description",
                                        "type": "text",
                                        "data": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard."
                                    },
                                    "image": {
                                        "name": "image",
                                        "label": "image news 2",
                                        "type": "image",
                                        "data": "photos/1/news-2.jpeg"
                                    }
                                }
                            },
                             "news3": {
                                "name": "news3",
                                "label": "news 3",
                                "type": "group",
                                "data": {
                                    "title": {
                                        "name": "title",
                                        "label": "title",
                                        "type": "text",
                                        "data": "5 ways to improve user retention for your startup"
                                    },
                                    "description": {
                                        "name": "description",
                                        "label": "description",
                                        "type": "text",
                                        "data": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard."
                                    },
                                    "image": {
                                        "name": "image",
                                        "label": "image news 3",
                                        "type": "image",
                                        "data": "photos/1/news-3.jpeg"
                                    }
                                }
                            }

                        }
                    }
                }
            },
             "client": {
                "name": "client",
                "label": "Client Content",
                "type": "group",
                "data": {
                    "title": {
                        "name": "title",
                        "label": "title",
                        "type": "text",
                        "data": "Meet our Clients"
                    },
                    "subtitle": {
                        "name": "subtitle",
                        "label": "subtitle",
                        "type": "text",
                        "data": "Our Awesome Clients"
                    },
                    "description": {
                        "name": "description",
                        "label": "description",
                        "type": "text",
                        "data": "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form."
                    },
                    "listclient": {
                        "name": "listclient",
                        "label": "list client",
                        "type": "group",
                        "data": {
                            "client1": {
                                "name": "client1",
                                "label": "logo client 1",
                                "type": "image",
                                "data": "photos/1/graygrids.svg"
                            },
                            "client2": {
                                "name": "client2",
                                "label": "logo client 2",
                                "type": "image",
                                "data": "photos/1/uideck.svg"
                            },
                            "client3": {
                                "name": "client3",
                                "label": "logo client 3",
                                "type": "image",
                                "data": "photos/1/ayroui.svg"
                            }
                        }
                    },
                    "listclient2": {
                        "name": "listclient2",
                        "label": "list client 2",
                        "type": "group",
                        "data": {
                            "client4": {
                                "name": "client4",
                                "label": "logo client 4",
                                "type": "image",
                                "data": "photos/1/lineicons.svg"
                            },
                            "client5": {
                                "name": "client5",
                                "label": "logo client 5",
                                "type": "image",
                                "data": "photos/1/tailwindtemplates.svg"
                            },
                            "client6": {
                                "name": "client6",
                                "label": "logo client 6",
                                "type": "image",
                                "data": "photos/1/ecomhtml.svg"
                            }
                        }
                    }
                }
            },
            "contact": {
                "name": "contact",
                "label": "Contact Content",
                "type": "group",
                "data": {
                    "title": {
                        "name": "title",
                        "label": "title",
                        "type": "text",
                        "data": "Get in Touch"
                    },
                    "subtitle": {
                        "name": "subtitle",
                        "label": "subtitle",
                        "type": "text",
                        "data": "Ready to Get Started"
                    },
                    "description": {
                        "name": "description",
                        "label": "description",
                        "type": "text",
                        "data": "At vero eos et accusamus et iusto odio dignissimos ducimus quiblanditiis praesentium"
                    },
                    "contact": {
                        "name": "contact",
                        "label": "Contact",
                        "type": "group",
                        "data": {
                            "title": {
                                "name": "title",
                                "label": "title",
                                "type": "text",
                                "data": "Contact"
                            },
                            "content1": {
                                "name": "content1",
                                "label": "content 1",
                                "type": "text",
                                "data": "0984537278623"
                            },
                            "content2": {
                                "name": "content2",
                                "label": "content 2",
                                "type": "text",
                                "data": "yourmail@gmail.com"
                            }
                        }
                    },
                    "address": {
                        "name": "address",
                        "label": "Address",
                        "type": "group",
                        "data": {
                            "title": {
                                "name": "title",
                                "label": "title",
                                "type": "text",
                                "data": "Address"
                            },
                            "content1": {
                                "name": "content1",
                                "label": "content 1",
                                "type": "text",
                                "data": "175 5th Ave, New York, NY 10010"
                            },
                            "content2": {
                                "name": "content2",
                                "label": "content 2",
                                "type": "text",
                                "data": "United States"
                            }
                        }
                    },
                    "schedule": {
                        "name": "schedule",
                        "label": "Schedule",
                        "type": "group",
                        "data": {
                            "title": {
                                "name": "title",
                                "label": "title",
                                "type": "text",
                                "data": "Schedule"
                            },
                            "content1": {
                                "name": "content1",
                                "label": "content 1",
                                "type": "text",
                                "data": "24 Hours / 7 Days Open"
                            },
                            "content2": {
                                "name": "content2",
                                "label": "content 2",
                                "type": "text",
                                "data": "Office time: 10 AM - 5:30 PM"
                            }
                        }
                    }
                }
            },
               "footer": {
                "name": "footer",
                "label": "Footer",
                "type": "group",
                "data": {
                    "logo": {
                        "name": "logo",
                        "label": "logo",
                        "type": "image",
                        "data": "photos/1/full-logo-badaso.png"
                    },
                    "description": {
                        "name": "description",
                        "label": "description",
                        "type": "text",
                        "data": "Making the world a better place through constructing elegant hierarchies."
                    },
                    "copyright": {
                        "name": "copyright",
                        "label": "copyright",
                        "type": "text",
                        "data": "© 2022 Landy Theme."
                    },
                    "created": {
                        "name": "created",
                        "label": "created",
                        "type": "text",
                        "data": "Designed and Developed by UASOFT"
                    },
                    "namefooter1": {
                        "name": "namefooter1",
                        "label": "Solutions",
                        "type": "group",
                        "data": {
                            "label1": {
                                "name": "label1",
                                "label": "Label 1",
                                "type": "url",
                                "data": {
                                    "url": "#",
                                    "text": "Marketing"
                                }
                            },
                            "label2": {
                                "name": "label2",
                                "label": "Label 2",
                                "type": "url",
                                "data": {
                                    "url": "#",
                                    "text": "Analytics"
                                }
                            },
                            "label3": {
                                "name": "label3",
                                "label": "Label 3",
                                "type": "url",
                                "data": {
                                    "url": "#",
                                    "text": "Commerce"
                                }
                            },
                            "label4": {
                                "name": "label4",
                                "label": "Label 4",
                                "type": "url",
                                "data": {
                                    "url": "#",
                                    "text": "Insights"
                                }
                            }
                        }
                    },
                    "namefooter2": {
                        "name": "namefooter2",
                        "label": "Support",
                        "type": "group",
                        "data": {
                            "label1": {
                                "name": "label1",
                                "label": "Label 1",
                                "type": "url",
                                "data": {
                                    "url": "#",
                                    "text": "Pricing"
                                }
                            },
                            "label2": {
                                "name": "label2",
                                "label": "Label 2",
                                "type": "url",
                                "data": {
                                    "url": "#",
                                    "text": "Documentation"
                                }
                            },
                            "label3": {
                                "name": "label3",
                                "label": "Label 3",
                                "type": "url",
                                "data": {
                                    "url": "#",
                                    "text": "Guides"
                                }
                            },
                            "label4": {
                                "name": "label4",
                                "label": "Label 4",
                                "type": "url",
                                "data": {
                                    "url": "#",
                                    "text": "API Status"
                                }
                            }
                        }
                    },
                    "subscribe": {
                        "name": "subscribe",
                        "label": "Subscribe",
                        "type": "group",
                        "data": {
                            "title": {
                                "name": "title",
                                "label": "title",
                                "type": "text",
                                "data": "Subscribe"
                            },
                            "description": {
                                "name": "description",
                                "label": "description",
                                "type": "text",
                                "data": "Subscribe to our newsletter for the latest updates"
                            }
                        }
                    }
                }
            },
            "sidebar": {
                "name": "sidebar",
                "label": "Sidebar Content",
                "type": "group",
                "data": {
                    "logo": {
                        "name": "logo",
                        "label": "Logo",
                        "type": "image",
                        "data": "photos/1/full-logo-badaso.png"
                    },
                    "description": {
                        "name": "description",
                        "label": "Description",
                        "type": "text",
                        "data": "Lorem ipsum dolor sit amet adipisicing elit. Sapiente fuga nisi rerum iusto intro."
                    },
                    "links": {
                        "name": "links",
                        "label": "Quick Links",
                        "type": "group",
                        "data": {
                            "link1": {
                                "name": "link1",
                                "label": "Link 1",
                                "type": "url",
                                "data": {
                                    "url": "#",
                                    "text": "About Us"
                                }
                            },
                            "link2": {
                                "name": "link2",
                                "label": "Link 2",
                                "type": "url",
                                "data": {
                                    "url": "#",
                                    "text": "Our Team"
                                }
                            },
                            "link3": {
                                "name": "link3",
                                "label": "Link 3",
                                "type": "url",
                                "data": {
                                    "url": "#",
                                    "text": "Latest News"
                                }
                            },
                            "link4": {
                                "name": "link4",
                                "label": "Link 4",
                                "type": "url",
                                "data": {
                                    "url": "#",
                                    "text": "Contact Us"
                                }
                            }
                        }
                    },
                    "socialmedia": {
                        "name": "socialmedia",
                        "label": "Social Media",
                        "type": "group",
                        "data": {
                            "fb": {
                                "name": "fb",
                                "label": "Facebook",
                                "type": "group",
                                "data": {
                                    "logo": {
                                        "name": "logo",
                                        "label": "logo",
                                        "type": "image",
                                        "data": "photos/1/fb.png"
                                    },
                                    "link": {
                                        "name": "link",
                                        "label": "link",
                                        "type": "url",
                                        "data": {
                                            "url": "#",
                                            "text": "facebook"
                                        }
                                    }
                                }
                            },
                            "twitter": {
                                "name": "twitter",
                                "label": "Twitter",
                                "type": "group",
                                "data": {
                                    "logo": {
                                        "name": "logo",
                                        "label": "logo",
                                        "type": "image",
                                        "data": "photos/1/social_twitter.png"
                                    },
                                    "links": {
                                        "name": "links",
                                        "label": "links",
                                        "type": "url",
                                        "data": {
                                            "url": "#",
                                            "text": "twitter"
                                        }
                                    }
                                }
                            },
                            "linkedln": {
                                "name": "linkedln",
                                "label": "Linkedln",
                                "type": "group",
                                "data": {
                                    "logo": {
                                        "name": "logo",
                                        "label": "logo",
                                        "type": "image",
                                        "data": "photos/1/linked.png"
                                    },
                                    "link": {
                                        "name": "link",
                                        "label": "link",
                                        "type": "url",
                                        "data": {
                                            "url": "#",
                                            "text": "Linkedln"
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }

                    }'
                ],
            ];



            foreach ($contents as $key => $content) {
                Content::where('slug', $content['slug'])->delete();
                Content::create($content);
            }

            DB::commit();
        } catch (Exception $e) {
            \DB::rollBack();

            throw new Exception('Exception occur ' . $e);
        }
    }
}
