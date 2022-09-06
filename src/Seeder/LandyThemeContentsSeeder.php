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
                    'slug' => 'landy-theme',
                    'label' => 'Landy Theme',
                    'value' => '{
                        "navbar": {
                "name": "navbar",
                "label": "Navbar",
                "type": "group",
                "data": {
                    "logo": {
                        "name": "logo",
                        "label": "Navbar Logo",
                        "type": "image",
                        "data": "photos/1/Full-logo-badaso-1.png"
                    },
                    "menulist": {
                        "name": "menulist",
                        "label": "Menu List",
                        "type": "array",
                        "data": [
                            {
                                "title": {
                                    "name": "title",
                                    "label": "Title",
                                    "type": "url",
                                    "data": {
                                        "url": "#",
                                        "text": "Home"
                                    }
                                }
                            },
                            {
                                "title": {
                                    "name": "title",
                                    "label": "Title",
                                    "type": "url",
                                    "data": {
                                        "url": "#",
                                        "text": "Services"
                                    }
                                }
                            },
                            {
                                "title": {
                                    "name": "title",
                                    "label": "Title",
                                    "type": "url",
                                    "data": {
                                        "url": "#",
                                        "text": "Portfolio"
                                    }
                                }
                            },
                            {
                                "title": {
                                    "name": "title",
                                    "label": "Title",
                                    "type": "url",
                                    "data": {
                                        "url": "#",
                                        "text": "Pricing"
                                    }
                                }
                            },
                            {
                                "title": {
                                    "name": "title",
                                    "label": "Title",
                                    "type": "url",
                                    "data": {
                                        "url": "#",
                                        "text": "Team"
                                    }
                                }
                            },
                            {
                                "title": {
                                    "name": "title",
                                    "label": "Title",
                                    "type": "url",
                                    "data": {
                                        "url": "#",
                                        "text": "Contact"
                                    }
                                }
                            }
                        ]
                    }
                }
            },
            "landingpage": {
                "name": "landingpage",
                "label": "Landing Page",
                "type": "group",
                "data": {
                    "image": {
                        "name": "image",
                        "label": "Image Landing Page",
                        "type": "image",
                        "data": "photos/1/hero-image.jpeg"
                    },
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
                    "video": {
                        "name": "video",
                        "label": "Video Started",
                        "type": "url",
                        "data": {
                            "url": "https://www.youtube.com/watch?v=NX_NW6bt6_s",
                            "text": null
                        }
                    }
                }
            },
            "about": {
                "name": "about",
                "label": "About Content",
                "type": "group",
                "data": {
                    "image": {
                        "name": "image",
                        "label": "About Image",
                        "type": "image",
                        "data": "photos/1/about-img1.jpeg"
                    },
                    "title": {
                        "name": "title",
                        "label": "Title",
                        "type": "text",
                        "data": "OUR STORY"
                    },
                    "description": {
                        "name": "description",
                        "label": "Description",
                        "type": "text",
                        "data": "Our team comes with the experience and knowledge"
                    },
                    "titlebutton": {
                        "name": "titlebutton",
                        "label": "Title Tabs Button",
                        "type": "array",
                        "data": [
                            {
                                "title": {
                                    "name": "title",
                                    "label": "title",
                                    "type": "text",
                                    "data": "WHO WE ARE"
                                }
                            },
                            {
                                "title": {
                                    "name": "title",
                                    "label": "title",
                                    "type": "text",
                                    "data": "OUR VISION"
                                }
                            },
                            {
                                "title": {
                                    "name": "title",
                                    "label": "title",
                                    "type": "text",
                                    "data": "OUR HISTORY"
                                }
                            }
                        ]
                    },
                    "tabs": {
                        "name": "tabs",
                        "label": "About Tabs",
                        "type": "array",
                        "data": [
                            {
                                "title": {
                                    "name": "title",
                                    "label": "Title",
                                    "type": "text",
                                    "data": "It is a long established fact that a reader will be distracted by the readable content  of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, look like readable English."
                                },
                                "description": {
                                    "name": "description",
                                    "label": "Description",
                                    "type": "text",
                                    "data": "There are many variations of passages of Lorem Ipsum available, but the majority have in some form, by injected humour."
                                }
                            },
                            {
                                "title": {
                                    "name": "title",
                                    "label": "Title",
                                    "type": "text",
                                    "data": null
                                },
                                "description": {
                                    "name": "description",
                                    "label": "Description",
                                    "type": "text",
                                    "data": "There are many variations of passages of Lorem Ipsum available, but the majority have in some form, by injected humour."
                                }
                            },
                            {
                                "title": {
                                    "name": "title",
                                    "label": "Title",
                                    "type": "text",
                                    "data": "It is a long established fact that a reader will be distracted by the readable content  of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, look like readable English."
                                },
                                "description": {
                                    "name": "description",
                                    "label": "Description",
                                    "type": "text",
                                    "data": null
                                }
                            }
                        ]
                    }
                }
            },
            "service": {
                "name": "service",
                "label": "Service Content",
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
                    "servicelist": {
                        "name": "servicelist",
                        "label": "Service List",
                        "type": "array",
                        "data": [
                            {
                                "logo": {
                                    "name": "logo",
                                    "label": "Logo Service",
                                    "type": "image",
                                    "data": "photos/1/capsule.png"
                                },
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
                                }
                            },
                            {
                                "logo": {
                                    "name": "logo",
                                    "label": "Logo Service",
                                    "type": "image",
                                    "data": "photos/1/tailwindcss.svg"
                                },
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
                                }
                            },
                            {
                                "logo": {
                                    "name": "logo",
                                    "label": "Logo Service",
                                    "type": "image",
                                    "data": "photos/1/shortcode.svg"
                                },
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
                                }
                            },
                            {
                                "logo": {
                                    "name": "logo",
                                    "label": "Logo Service",
                                    "type": "image",
                                    "data": "photos/1/dashboard.svg"
                                },
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
                                }
                            },
                            {
                                "logo": {
                                    "name": "logo",
                                    "label": "Logo Service",
                                    "type": "image",
                                    "data": "photos/1/layers.svg"
                                },
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
                                }
                            },
                            {
                                "logo": {
                                    "name": "logo",
                                    "label": "Logo Service",
                                    "type": "image",
                                    "data": "photos/1/refresh.svg"
                                },
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
                                }
                            }
                        ]
                    }
                }
            },
            "video": {
                "name": "video",
                "label": "Video Content",
                "type": "group",
                "data": {
                    "url": {
                        "name": "url",
                        "label": "URL Video",
                        "type": "url",
                        "data": {
                            "url": "https://www.youtube.com/watch?v=NX_NW6bt6_s",
                            "text": null
                        }
                    },
                    "bgvideo": {
                        "name": "bgvideo",
                        "label": "Background Video",
                        "type": "image",
                        "data": "photos/1/video-bg.png"
                    },
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
                    "portfoliolist": {
                        "name": "portfoliolist",
                        "label": "Portfolio List",
                        "type": "array",
                        "data": [
                            {
                                "image": {
                                    "name": "image",
                                    "label": "Image Project",
                                    "type": "image",
                                    "data": "photos/1/pf1.jpeg"
                                },
                                "title": {
                                    "name": "title",
                                    "label": "Title Project",
                                    "type": "text",
                                    "data": "Graphics Design"
                                },
                                "description": {
                                    "name": "description",
                                    "label": "Description Project",
                                    "type": "text",
                                    "data": "Short description for the ones who look for something new. Awesome!"
                                }
                            },
                            {
                                "image": {
                                    "name": "image",
                                    "label": "Image Project",
                                    "type": "image",
                                    "data": "photos/1/pf2.jpeg"
                                },
                                "title": {
                                    "name": "title",
                                    "label": "Title Project",
                                    "type": "text",
                                    "data": "Web Development"
                                },
                                "description": {
                                    "name": "description",
                                    "label": "Description Project",
                                    "type": "text",
                                    "data": "Short description for the ones who look for something new. Awesome!"
                                }
                            },
                            {
                                "image": {
                                    "name": "image",
                                    "label": "Image Project",
                                    "type": "image",
                                    "data": "photos/1/pf3.jpeg"
                                },
                                "title": {
                                    "name": "title",
                                    "label": "Title Project",
                                    "type": "text",
                                    "data": "App Development"
                                },
                                "description": {
                                    "name": "description",
                                    "label": "Description Project",
                                    "type": "text",
                                    "data": "Short description for the ones who look for something new. Awesome!"
                                }
                            },
                            {
                                "image": {
                                    "name": "image",
                                    "label": "Image Project",
                                    "type": "image",
                                    "data": "photos/1/pf2.jpeg"
                                },
                                "title": {
                                    "name": "title",
                                    "label": "Title Project",
                                    "type": "text",
                                    "data": "Digital Marketing"
                                },
                                "description": {
                                    "name": "description",
                                    "label": "Description Project",
                                    "type": "text",
                                    "data": "Short description for the ones who look for something new. Awesome!"
                                }
                            },
                            {
                                "image": {
                                    "name": "image",
                                    "label": "Image Project",
                                    "type": "image",
                                    "data": "photos/1/pf1.jpeg"
                                },
                                "title": {
                                    "name": "title",
                                    "label": "Title Project",
                                    "type": "text",
                                    "data": "SEO Services"
                                },
                                "description": {
                                    "name": "description",
                                    "label": "Description Project",
                                    "type": "text",
                                    "data": "Short description for the ones who look for something new. Awesome!"
                                }
                            },
                            {
                                "image": {
                                    "name": "image",
                                    "label": "Image Project",
                                    "type": "image",
                                    "data": "photos/1/pf3.jpeg"
                                },
                                "title": {
                                    "name": "title",
                                    "label": "Title Project",
                                    "type": "text",
                                    "data": "Product Design"
                                },
                                "description": {
                                    "name": "description",
                                    "label": "Description Project",
                                    "type": "text",
                                    "data": "Short description for the ones who look for something new. Awesome!"
                                }
                            }
                        ]
                    }
                }
            },
            "price": {
                "name": "price",
                "label": "Price Content",
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
                    "list": {
                        "name": "list",
                        "label": "Price List",
                        "type": "array",
                        "data": [
                            {
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
                                "benefit": {
                                    "name": "benefit",
                                    "label": "Benefit",
                                    "type": "group",
                                    "data": {
                                        "list": {
                                            "name": "list",
                                            "label": "List Benefit",
                                            "type": "array",
                                            "data": [
                                                {
                                                    "description": {
                                                        "name": "description",
                                                        "label": "Description",
                                                        "type": "text",
                                                        "data": "Cras justo odio."
                                                    }
                                                },
                                                {
                                                    "description": {
                                                        "name": "description",
                                                        "label": "Description",
                                                        "type": "text",
                                                        "data": "Dapibus ac facilisis in."
                                                    }
                                                },
                                                {
                                                    "description": {
                                                        "name": "description",
                                                        "label": "Description",
                                                        "type": "text",
                                                        "data": "Morbi leo risus."
                                                    }
                                                },
                                                {
                                                    "description": {
                                                        "name": "description",
                                                        "label": "Description",
                                                        "type": "text",
                                                        "data": "Excepteur sint occaecat velit."
                                                    }
                                                }
                                            ]
                                        }
                                    }
                                }
                            },
                            {
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
                                "benefit": {
                                    "name": "benefit",
                                    "label": "Benefit",
                                    "type": "group",
                                    "data": {
                                        "list": {
                                            "name": "list",
                                            "label": "List Benefit",
                                            "type": "array",
                                            "data": [
                                                {
                                                    "description": {
                                                        "name": "description",
                                                        "label": "Description",
                                                        "type": "text",
                                                        "data": "Cras justo odio."
                                                    }
                                                },
                                                {
                                                    "description": {
                                                        "name": "description",
                                                        "label": "Description",
                                                        "type": "text",
                                                        "data": "Dapibus ac facilisis in."
                                                    }
                                                },
                                                {
                                                    "description": {
                                                        "name": "description",
                                                        "label": "Description",
                                                        "type": "text",
                                                        "data": "Morbi leo risus."
                                                    }
                                                },
                                                {
                                                    "description": {
                                                        "name": "description",
                                                        "label": "Description",
                                                        "type": "text",
                                                        "data": "Excepteur sint occaecat velit."
                                                    }
                                                }
                                            ]
                                        }
                                    }
                                }
                            },
                            {
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
                                "benefit": {
                                    "name": "benefit",
                                    "label": "Benefit",
                                    "type": "group",
                                    "data": {
                                        "list": {
                                            "name": "list",
                                            "label": "List Benefit",
                                            "type": "array",
                                            "data": [
                                                {
                                                    "description": {
                                                        "name": "description",
                                                        "label": "Description",
                                                        "type": "text",
                                                        "data": "Cras justo odio."
                                                    }
                                                },
                                                {
                                                    "description": {
                                                        "name": "description",
                                                        "label": "Description",
                                                        "type": "text",
                                                        "data": "Dapibus ac facilisis in."
                                                    }
                                                },
                                                {
                                                    "description": {
                                                        "name": "description",
                                                        "label": "Description",
                                                        "type": "text",
                                                        "data": "Morbi leo risus."
                                                    }
                                                },
                                                {
                                                    "description": {
                                                        "name": "description",
                                                        "label": "Description",
                                                        "type": "text",
                                                        "data": "Excepteur sint occaecat velit."
                                                    }
                                                }
                                            ]
                                        }
                                    }
                                }
                            }
                        ]
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
                    "list": {
                        "name": "list",
                        "label": "Team List",
                        "type": "array",
                        "data": [
                            {
                                "avatar": {
                                    "name": "avatar",
                                    "label": "Avatar Team",
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
                            },
                            {
                                "avatar": {
                                    "name": "avatar",
                                    "label": "Avatar Team",
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
                            },
                            {
                                "avatar": {
                                    "name": "avatar",
                                    "label": "Avatar Team",
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
                        ]
                    }
                }
            },
            "callaction": {
                "name": "callaction",
                "label": "Call Action",
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
                    "list": {
                        "name": "list",
                        "label": "Review List",
                        "type": "array",
                        "data": [
                            {
                                "avatar": {
                                    "name": "avatar",
                                    "label": "Avatar",
                                    "type": "image",
                                    "data": "photos/1/author-1.jpeg"
                                },
                                "name": {
                                    "name": "name",
                                    "label": "Name",
                                    "type": "text",
                                    "data": "Musharof Chowdhury"
                                },
                                "position": {
                                    "name": "position",
                                    "label": "Position",
                                    "type": "text",
                                    "data": "Web Entrepreneur"
                                },
                                "content": {
                                    "name": "content",
                                    "label": "Content",
                                    "type": "text",
                                    "data": "On the other hand denoun with righteous and disliks men who are beguiled demorae momentc blinded by desire that can"
                                }
                            },
                            {
                                "avatar": {
                                    "name": "avatar",
                                    "label": "Avatar",
                                    "type": "image",
                                    "data": "photos/1/author-4.jpeg"
                                },
                                "name": {
                                    "name": "name",
                                    "label": "Name",
                                    "type": "text",
                                    "data": "Musharof Chowdhury"
                                },
                                "position": {
                                    "name": "position",
                                    "label": "Position",
                                    "type": "text",
                                    "data": "Web Entrepreneur"
                                },
                                "content": {
                                    "name": "content",
                                    "label": "Content",
                                    "type": "text",
                                    "data": "On the other hand denoun with righteous and disliks men who are beguiled demorae momentc blinded by desire that can"
                                }
                            },
                            {
                                "avatar": {
                                    "name": "avatar",
                                    "label": "Avatar",
                                    "type": "image",
                                    "data": "photos/1/author-5.jpeg"
                                },
                                "name": {
                                    "name": "name",
                                    "label": "Name",
                                    "type": "text",
                                    "data": "Musharof Chowdhury"
                                },
                                "position": {
                                    "name": "position",
                                    "label": "Position",
                                    "type": "text",
                                    "data": "Web Entrepreneur"
                                },
                                "content": {
                                    "name": "content",
                                    "label": "Content",
                                    "type": "text",
                                    "data": "On the other hand denoun with righteous and disliks men who are beguiled demorae momentc blinded by desire that can"
                                }
                            }
                        ]
                    }
                }
            },
            "news": {
                "name": "news",
                "label": "Latest News",
                "type": "group",
                "data": {
                    "title": {
                        "name": "title",
                        "label": "Title",
                        "type": "text",
                        "data": "latest news"
                    },
                    "subtitle": {
                        "name": "subtitle",
                        "label": "Subtitle",
                        "type": "text",
                        "data": "Latest News & Blog"
                    },
                    "description": {
                        "name": "description",
                        "label": "Description",
                        "type": "text",
                        "data": "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form."
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
                        "label": "Title",
                        "type": "text",
                        "data": "Meet our Clients"
                    },
                    "subtitle": {
                        "name": "subtitle",
                        "label": "Subtitle",
                        "type": "text",
                        "data": "Our Awesome Clients"
                    },
                    "description": {
                        "name": "description",
                        "label": "Description",
                        "type": "text",
                        "data": "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form."
                    },
                    "clientlist": {
                        "name": "clientlist",
                        "label": "Client List",
                        "type": "array",
                        "data": [
                            {
                                "logo": {
                                    "name": "logo",
                                    "label": "Client Logo",
                                    "type": "image",
                                    "data": "photos/1/aws.png"
                                },
                                "title": {
                                    "name": "title",
                                    "label": "Title Logo",
                                    "type": "text",
                                    "data": "AWS"
                                }
                            },
                            {
                                "logo": {
                                    "name": "logo",
                                    "label": "Client Logo",
                                    "type": "image",
                                    "data": "photos/1/azure.png"
                                },
                                "title": {
                                    "name": "title",
                                    "label": "Title Logo",
                                    "type": "text",
                                    "data": "Azure"
                                }
                            },
                            {
                                "logo": {
                                    "name": "logo",
                                    "label": "Client Logo",
                                    "type": "image",
                                    "data": "photos/1/cloud-host.png"
                                },
                                "title": {
                                    "name": "title",
                                    "label": "Title Logo",
                                    "type": "text",
                                    "data": "IDCloudHost"
                                }
                            }
                        ]
                    },
                    "clientlist2": {
                        "name": "clientlist2",
                        "label": "Client List 2",
                        "type": "array",
                        "data": [
                            {
                                "logo": {
                                    "name": "logo",
                                    "label": "Client Logo",
                                    "type": "image",
                                    "data": "photos/1/google-cloud.png"
                                },
                                "title": {
                                    "name": "title",
                                    "label": "Title Logo",
                                    "type": "text",
                                    "data": "Google Cloud"
                                }
                            },
                            {
                                "logo": {
                                    "name": "logo",
                                    "label": "Client Logo",
                                    "type": "image",
                                    "data": "photos/1/alibaba.png"
                                },
                                "title": {
                                    "name": "title",
                                    "label": "Title Logo",
                                    "type": "text",
                                    "data": "Alibaba Cloud"
                                }
                            },
                            {
                                "logo": {
                                    "name": "logo",
                                    "label": "Client Logo",
                                    "type": "image",
                                    "data": "photos/1/digital-ocean.png"
                                },
                                "title": {
                                    "name": "title",
                                    "label": "Title Logo",
                                    "type": "text",
                                    "data": "Digital Ocean"
                                }
                            }
                        ]
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
                        "label": "Title",
                        "type": "text",
                        "data": "Get in Touch"
                    },
                    "subtitle": {
                        "name": "subtitle",
                        "label": "Subtitle",
                        "type": "text",
                        "data": "Ready to Get Started"
                    },
                    "description": {
                        "name": "description",
                        "label": "Description",
                        "type": "text",
                        "data": "At vero eos et accusamus et iusto odio dignissimos ducimus quiblanditiis praesentium"
                    },
                    "list": {
                        "name": "list",
                        "label": "Contact List",
                        "type": "array",
                        "data": [
                            {
                                "logo": {
                                    "name": "logo",
                                    "label": "Logo",
                                    "type": "image",
                                    "data": "photos/1/telephone.svg"
                                },
                                "title": {
                                    "name": "title",
                                    "label": "Title",
                                    "type": "text",
                                    "data": "Contact"
                                },
                                "description": {
                                    "name": "description",
                                    "label": "Description",
                                    "type": "text",
                                    "data": "0984537278623"
                                },
                                "description2": {
                                    "name": "description2",
                                    "label": "Description 2",
                                    "type": "text",
                                    "data": "yourmail@gmail.com"
                                }
                            },
                            {
                                "logo": {
                                    "name": "logo",
                                    "label": "Logo",
                                    "type": "image",
                                    "data": "photos/1/maps.svg"
                                },
                                "title": {
                                    "name": "title",
                                    "label": "Title",
                                    "type": "text",
                                    "data": "Address"
                                },
                                "description": {
                                    "name": "description",
                                    "label": "Description",
                                    "type": "text",
                                    "data": "175 5th Ave, New York, NY 10010"
                                },
                                "description2": {
                                    "name": "description2",
                                    "label": "Description 2",
                                    "type": "text",
                                    "data": "United States"
                                }
                            },
                            {
                                "logo": {
                                    "name": "logo",
                                    "label": "Logo",
                                    "type": "image",
                                    "data": "photos/1/alarm-clock.svg"
                                },
                                "title": {
                                    "name": "title",
                                    "label": "Title",
                                    "type": "text",
                                    "data": "Schedule"
                                },
                                "description": {
                                    "name": "description",
                                    "label": "Description",
                                    "type": "text",
                                    "data": "24 Hours / 7 Days Open"
                                },
                                "description2": {
                                    "name": "description2",
                                    "label": "Description 2",
                                    "type": "text",
                                    "data": "Office time: 10 AM - 5:30 PM"
                                }
                            }
                        ]
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
                        "label": "Footer Logo",
                        "type": "image",
                        "data": "photos/1/full-logo-badaso.png"
                    },
                    "description": {
                        "name": "description",
                        "label": "Description",
                        "type": "text",
                        "data": "Making the world a better place through constructing elegant hierarchies."
                    },
                    "footerlist": {
                        "name": "footerlist",
                        "label": "Footer List",
                        "type": "array",
                        "data": [
                            {
                                "title": {
                                    "name": "title",
                                    "label": "Title",
                                    "type": "text",
                                    "data": "Solutions"
                                },
                                "label": {
                                    "name": "label",
                                    "label": "Label",
                                    "type": "group",
                                    "data": {
                                        "labeltitle": {
                                            "name": "labeltitle",
                                            "label": "Label Title",
                                            "type": "array",
                                            "data": [
                                                {
                                                    "title": {
                                                        "name": "title",
                                                        "label": "Title",
                                                        "type": "url",
                                                        "data": {
                                                            "url": "#",
                                                            "text": "Marketing"
                                                        }
                                                    }
                                                },
                                                {
                                                    "title": {
                                                        "name": "title",
                                                        "label": "Title",
                                                        "type": "url",
                                                        "data": {
                                                            "url": "#",
                                                            "text": "Analytics"
                                                        }
                                                    }
                                                },
                                                {
                                                    "title": {
                                                        "name": "title",
                                                        "label": "Title",
                                                        "type": "url",
                                                        "data": {
                                                            "url": "#",
                                                            "text": "Commerce"
                                                        }
                                                    }
                                                },
                                                {
                                                    "title": {
                                                        "name": "title",
                                                        "label": "Title",
                                                        "type": "url",
                                                        "data": {
                                                            "url": "#",
                                                            "text": "Insights"
                                                        }
                                                    }
                                                }
                                            ]
                                        }
                                    }
                                }
                            },
                            {
                                "title": {
                                    "name": "title",
                                    "label": "Title",
                                    "type": "text",
                                    "data": "Support"
                                },
                                "label": {
                                    "name": "label",
                                    "label": "Label",
                                    "type": "group",
                                    "data": {
                                        "labeltitle": {
                                            "name": "labeltitle",
                                            "label": "Label Title",
                                            "type": "array",
                                            "data": [
                                                {
                                                    "title": {
                                                        "name": "title",
                                                        "label": "Title",
                                                        "type": "url",
                                                        "data": {
                                                            "url": "#",
                                                            "text": "Pricing"
                                                        }
                                                    }
                                                },
                                                {
                                                    "title": {
                                                        "name": "title",
                                                        "label": "Title",
                                                        "type": "url",
                                                        "data": {
                                                            "url": "#",
                                                            "text": "Documentation"
                                                        }
                                                    }
                                                },
                                                {
                                                    "title": {
                                                        "name": "title",
                                                        "label": "Title",
                                                        "type": "url",
                                                        "data": {
                                                            "url": "#",
                                                            "text": "Guides"
                                                        }
                                                    }
                                                },
                                                {
                                                    "title": {
                                                        "name": "title",
                                                        "label": "Title",
                                                        "type": "url",
                                                        "data": {
                                                            "url": "#",
                                                            "text": "API Status"
                                                        }
                                                    }
                                                }
                                            ]
                                        }
                                    }
                                }
                            }
                        ]
                    },
                    "subscribe": {
                        "name": "subscribe",
                        "label": "Subscribe",
                        "type": "group",
                        "data": {
                            "title": {
                                "name": "title",
                                "label": "Title",
                                "type": "text",
                                "data": "Subscribe"
                            },
                            "description": {
                                "name": "description",
                                "label": "Description",
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
                        "label": "Sidebar Logo",
                        "type": "image",
                        "data": "photos/1/full-logo-badaso.png"
                    },
                    "description": {
                        "name": "description",
                        "label": "Description",
                        "type": "text",
                        "data": "Lorem ipsum dolor sit amet adipisicing elit. Sapiente fuga nisi rerum iusto intro."
                    },
                    "title": {
                        "name": "title",
                        "label": "Title Quick",
                        "type": "text",
                        "data": "Quick Links"
                    },
                    "links": {
                        "name": "links",
                        "label": "Quick Links",
                        "type": "array",
                        "data": [
                            {
                                "label": {
                                    "name": "label",
                                    "label": "Links Label",
                                    "type": "url",
                                    "data": {
                                        "url": "#",
                                        "text": "About"
                                    }
                                },
                                "title": {
                                    "name": "title",
                                    "label": "Title",
                                    "type": "text",
                                    "data": "About Us"
                                }
                            },
                            {
                                "label": {
                                    "name": "label",
                                    "label": "Links Label",
                                    "type": "url",
                                    "data": {
                                        "url": "#",
                                        "text": "Team"
                                    }
                                },
                                "title": {
                                    "name": "title",
                                    "label": "Title",
                                    "type": "text",
                                    "data": "Our Team"
                                }
                            },
                            {
                                "label": {
                                    "name": "label",
                                    "label": "Links Label",
                                    "type": "url",
                                    "data": {
                                        "url": "#",
                                        "text": "Contact"
                                    }
                                },
                                "title": {
                                    "name": "title",
                                    "label": "Title",
                                    "type": "text",
                                    "data": "Contact Us"
                                }
                            }
                        ]
                    },
                    "titlemedia": {
                        "name": "titlemedia",
                        "label": "Title Social Media",
                        "type": "text",
                        "data": "Follow Us On"
                    },
                    "socialmedia": {
                        "name": "socialmedia",
                        "label": "Social Media",
                        "type": "array",
                        "data": [
                            {
                                "logo": {
                                    "name": "logo",
                                    "label": "Logo",
                                    "type": "image",
                                    "data": "photos/1/fb.png"
                                },
                                "url": {
                                    "name": "url",
                                    "label": "Url",
                                    "type": "url",
                                    "data": {
                                        "url": "#",
                                        "text": "Facebook"
                                    }
                                }
                            },
                            {
                                "logo": {
                                    "name": "logo",
                                    "label": "Logo",
                                    "type": "image",
                                    "data": "photos/1/social_twitter.png"
                                },
                                "url": {
                                    "name": "url",
                                    "label": "Url",
                                    "type": "url",
                                    "data": {
                                        "url": "#",
                                        "text": "Twitter"
                                    }
                                }
                            },
                            {
                                "logo": {
                                    "name": "logo",
                                    "label": "Logo",
                                    "type": "image",
                                    "data": "photos/1/linked.png"
                                },
                                "url": {
                                    "name": "url",
                                    "label": "Url",
                                    "type": "url",
                                    "data": {
                                        "url": "#",
                                        "text": "Linkedln"
                                    }
                                }
                            }
                        ]
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
