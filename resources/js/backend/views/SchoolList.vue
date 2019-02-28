<template>
  <div>
    <b-card>
      <template slot="header">
        <h3 class="card-title">
          {{ $t('labels.backend.schools.titles.index') }}
        </h3>
        <div class="card-options" v-if="this.$app.user.can('create schools')">
          <b-button to="/schools/create" variant="success" size="sm">
            <i class="fe fe-plus-circle"></i> {{ $t('buttons.schools.create') }}
          </b-button>
        </div>
      </template>
      <b-datatable
        ref="datasource"
        @context-changed="onContextChanged"
        search-route="admin.posts.search"
        delete-route="admin.posts.destroy"
        action-route="admin.posts.batch_action"
        :actions="actions"
        :selected.sync="selected"
      >
        <b-table
          ref="datatable"
          striped
          bordered
          show-empty
          stacked="md"
          no-local-sorting
          :empty-text="$t('labels.datatables.no_results')"
          :empty-filtered-text="$t('labels.datatables.no_matched_results')"
          :fields="fields"
          :items="dataLoadProvider"
          sort-by="posts.created_at"
          :sort-desc="true"
        >
          <template slot="HEAD_checkbox" slot-scope="data"></template>
          <template slot="checkbox" slot-scope="row">
            <b-form-checkbox
              :value="row.item.id"
              v-model="selected"
            ></b-form-checkbox>
          </template>
          <template slot="image" slot-scope="row">
            <template v-if="row.item.featured_image_url">
              <router-link
                v-if="row.item.can_edit"
                :to="`/posts/${row.item.id}/edit`"
              >
                <b-img-style
                  :src="row.item.featured_image_url"
                  :width="120"
                  :height="80"
                  rounded
                ></b-img-style>
              </router-link>
              <b-img-style
                v-else
                :src="row.item.featured_image_url"
                :width="120"
                :height="80"
                rounded
              ></b-img-style>
            </template>
          </template>
          <template slot="title" slot-scope="row">
            <router-link
              v-if="row.item.can_edit"
              :to="`/posts/${row.item.id}/edit`"
              v-text="row.value"
            ></router-link>
            <span v-else v-text="row.value"></span>
          </template>
          <template slot="owner" slot-scope="row">
            <span v-if="row.item.owner">{{ row.item.owner.name }}</span>
            <span v-else>{{ $t('labels.anonymous') }}</span>
          </template>
          <template slot="posts.created_at" slot-scope="row">
            {{ row.item.created_at }}
          </template>
          <template slot="posts.updated_at" slot-scope="row">
            {{ row.item.updated_at }}
          </template>
          <template slot="actions" slot-scope="row">
            <b-button
              size="sm"
              variant="success"
              :href="$app.route('blog.show', { post: row.item.slug })"
              target="_blank"
              v-b-tooltip.hover
              :title="$t('buttons.preview')"
              class="mr-1"
            >
              <i class="fe fe-eye"></i>
            </b-button>
            <b-button
              v-if="row.item.can_edit"
              size="sm"
              variant="primary"
              :to="`/posts/${row.item.id}/edit`"
              v-b-tooltip.hover
              :title="$t('buttons.edit')"
              class="mr-1"
            >
              <i class="fe fe-edit"></i>
            </b-button>
            <b-button
              v-if="row.item.can_delete"
              size="sm"
              variant="danger"
              v-b-tooltip.hover
              :title="$t('buttons.delete')"
              @click.stop="onDelete(row.item.id)"
            >
              <i class="fe fe-trash"></i>
            </b-button>
          </template>
        </b-table>
      </b-datatable>
    </b-card>
  </div>
</template>

<script>
import axios from 'axios'

export default {
  name: 'SchoolList',
  data() {
    return {
      selected: [],
      fields: [
        { key: 'checkbox' },
        { key: 'image', label: this.$t('validation.attributes.image') },
        {
          key: 'name',
          label: this.$t('validation.attributes.name'),
          sortable: true
        },
        {
          key: 'school_id',
          label: this.$t('validation.attributes.id'),
          sortable: true
        },
        {
          key: 'district',
          label: this.$t('validation.attributes.district'),
          sortable: true
        },
        {
          key: 'principal',
          label: this.$t('validation.attributes.principal'),
          sortable: true
        },
        {
          key: 'students',
          label: this.$t('validation.attributes.students'),
          sortable: true
        },
        {
          key: 'teachers',
          label: this.$t('validation.attributes.teachers'),
          sortable: true
        },
        {
          key: 'classrooms',
          label: this.$t('validation.attributes.classrooms'),
          sortable: true
        },
        {
          key: 'address',
          label: this.$t('validation.attributes.address'),
          sortable: true
        },
        {
          key: 'contact',
          label: this.$t('validation.attributes.contact'),
          sortable: true
        },
        { key: 'actions', label: this.$t('labels.actions'), class: 'nowrap' }
      ],
      actions: {
        destroy: this.$t('labels.backend.posts.actions.destroy')
      }
    }
  },
  methods: {
    dataLoadProvider(ctx) {
      return this.$refs.datasource.loadData(ctx.sortBy, ctx.sortDesc)
    },
    onContextChanged() {
      return this.$refs.datatable.refresh()
    },
    onDelete(id) {
      this.$refs.datasource.deleteRow({ post: id })
    }
  }
}
</script>
