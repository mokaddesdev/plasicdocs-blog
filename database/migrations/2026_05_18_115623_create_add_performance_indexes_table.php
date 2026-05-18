<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // POSTS
        Schema::table('posts', function (Blueprint $table) {
            $table->index( ['status', 'published_at'], 'posts_status_published_index');
            $table->index(['is_featured', 'published_at'], 'posts_featured_published_index' );
            $table->index(['is_editors_choice', 'published_at'], 'posts_editors_choice_published_index' );
            $table->index(['user_id', 'status'],'posts_user_status_index');
            $table->index( ['category_id', 'status'], 'posts_category_status_index');
            $table->index('slug', 'posts_slug_index');
            $table->index('created_at', 'posts_created_at_index');
        });

        // COMMENTS
        Schema::table('comments', function (Blueprint $table) {

            $table->index(['post_id', 'parent_id', 'is_approved'],'comments_post_parent_approved_index');
            $table->index(['post_id', 'is_approved'],'comments_post_approved_index');
            $table->index(['user_id', 'is_approved'], 'comments_user_approved_index');
            $table->index('parent_id', 'comments_parent_index');
            $table->index('created_at', 'comments_created_at_index');
        });

        // POST TAG
        Schema::table('post_tag', function (Blueprint $table) {

            $table->index('tag_id', 'post_tag_tag_id_index');
            $table->index('post_id', 'post_tag_post_id_index');
        });

        // POST VIEWS
        Schema::table('post_views', function (Blueprint $table) {

            $table->index(['post_id', 'viewed_at'],'post_views_post_date_index');
            $table->index('viewed_at', 'post_views_date_index');
        });

        // USERS
        Schema::table('users', function (Blueprint $table) {

            $table->index( ['role', 'is_featured'], 'users_role_featured_index');
            $table->index('email', 'users_email_index');
        });

        // CATEGORIES
        Schema::table('categories', function (Blueprint $table) {

            $table->index(['is_active', 'sort_order'],'categories_active_order_index');
            $table->index('slug','categories_slug_index');
        });

        // TAGS
        Schema::table('tags', function (Blueprint $table) {

            $table->index('name','tags_name_index');
            $table->index( 'slug', 'tags_slug_index' );
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // POSTS
        Schema::table('posts', function (Blueprint $table) {
            $table->dropIndex('posts_status_published_index');
            $table->dropIndex('posts_featured_published_index');
            $table->dropIndex('posts_editors_choice_published_index');
            $table->dropIndex('posts_user_status_index');
            $table->dropIndex('posts_category_status_index');
            $table->dropIndex('posts_slug_index');
            $table->dropIndex('posts_created_at_index');
        });

        // COMMENTS
        Schema::table('comments', function (Blueprint $table) {

            $table->dropIndex('comments_post_parent_approved_index');
            $table->dropIndex('comments_post_approved_index');
            $table->dropIndex('comments_user_approved_index');
            $table->dropIndex('comments_parent_index');
            $table->dropIndex('comments_created_at_index');
        });

        // POST TAG
        Schema::table('post_tag', function (Blueprint $table) {

            $table->dropIndex('post_tag_tag_id_index');
            $table->dropIndex('post_tag_post_id_index');
        });

        // POST VIEWS
        Schema::table('post_views', function (Blueprint $table) {

            $table->dropIndex('post_views_post_date_index');
            $table->dropIndex('post_views_date_index');
        });

        // USERS
        Schema::table('users', function (Blueprint $table) {

            $table->dropIndex('users_role_featured_index');
            $table->dropIndex('users_email_index');
        });

        // CATEGORIES
        Schema::table('categories', function (Blueprint $table) {

            $table->dropIndex('categories_active_order_index');
            $table->dropIndex('categories_slug_index');
        });

        // TAGS
        Schema::table('tags', function (Blueprint $table) {

            $table->dropIndex('tags_name_index');
            $table->dropIndex('tags_slug_index');
        });
    }
};