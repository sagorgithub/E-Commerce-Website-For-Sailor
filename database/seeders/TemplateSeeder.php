<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Template;

class TemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $templates = [
            [
                'name' => 'Hero CTA Template',
                'description' => 'Simple hero section with call-to-action button',
                'css_class' => 'template-hero-cta',
                'view_name' => 'hero-cta',
                'is_active' => true,
                'config' => [
                    'sections' => ['hero', 'cta'],
                    'features' => ['title', 'subtitle', 'cta_text', 'cta_link', 'image']
                ]
            ],
            [
                'name' => 'Product Showcase Template',
                'description' => 'Product showcase with features and benefits',
                'css_class' => 'template-product-showcase',
                'view_name' => 'product-showcase',
                'is_active' => true,
                'config' => [
                    'sections' => ['hero', 'features', 'benefits', 'cta'],
                    'features' => ['title', 'subtitle', 'description', 'cta_text', 'cta_link', 'image']
                ]
            ],
            [
                'name' => 'Story Benefits Template',
                'description' => 'Story-based template with benefits section',
                'css_class' => 'template-story-benefits',
                'view_name' => 'story-benefits',
                'is_active' => true,
                'config' => [
                    'sections' => ['hero', 'story', 'benefits', 'testimonials', 'cta'],
                    'features' => ['title', 'subtitle', 'description', 'cta_text', 'cta_link', 'image']
                ]
            ],
            [
                'name' => 'FAQ Contact Template',
                'description' => 'FAQ section with contact form',
                'css_class' => 'template-faq-contact',
                'view_name' => 'faq-contact',
                'is_active' => true,
                'config' => [
                    'sections' => ['hero', 'features', 'faq', 'contact', 'cta'],
                    'features' => ['title', 'subtitle', 'description', 'cta_text', 'cta_link', 'image']
                ]
            ],
            [
                'name' => 'Default Template',
                'description' => 'Default template for all landing pages',
                'css_class' => 'template-default',
                'view_name' => 'default',
                'is_active' => true,
                'config' => [
                    'sections' => ['hero', 'content', 'cta'],
                    'features' => ['title', 'subtitle', 'description', 'cta_text', 'cta_link', 'image']
                ]
            ]
        ];

        foreach ($templates as $template) {
            Template::create($template);
        }
    }
}
