<template>
  <div>
    <form @submit.prevent="onSubmit">
      <b-row>
        <b-col xl="10">
          <b-card>
            <h3 class="card-title" slot="header">
              {{
                isNew
                  ? $t('labels.backend.schools.titles.create')
                  : $t('labels.backend.schools.titles.edit')
              }}
            </h3>
            <b-form-group
              :label="$t('validation.attributes.school_name')"
              label-for="school_name"
              horizontal
              :label-cols="2"
              :feedback="feedback('school_name')"
            >
              <b-form-input
                id="school_name"
                name="school_name"
                required
                :placeholder="$t('validation.attributes.school_name')"
                v-model="model.school_name"
                :state="state('school_name')"
              ></b-form-input>
            </b-form-group>

            <b-form-group
              :label="$t('validation.attributes.school_id')"
              label-for="school_id"
              horizontal
              :label-cols="2"
              :feedback="feedback('school_id')"
            >
              <b-form-input
                id="school_id"
                name="school_id"
                required
                :placeholder="$t('validation.attributes.school_id')"
                v-model="model.school_id"
                :state="state('school_id')"
              ></b-form-input>
            </b-form-group>

            <b-form-group
              :label="$t('validation.attributes.district')"
              label-for="district"
              horizontal
              :label-cols="2"
              :feedback="feedback('district')"
            >
              <b-form-input
                id="district"
                name="district"
                required
                :placeholder="$t('validation.attributes.district')"
                v-model="model.district"
                :state="state('district')"
              ></b-form-input>
            </b-form-group>

            <b-form-group
              :label="$t('validation.attributes.principal_name')"
              label-for="principal_name"
              horizontal
              :label-cols="2"
              :feedback="feedback('principal_name')"
            >
              <b-form-input
                id="principal_name"
                name="principal_name"
                required
                :placeholder="$t('validation.attributes.principal_name')"
                v-model="model.principal_name"
                :state="state('principal_name')"
              ></b-form-input>
            </b-form-group>

            <b-form-group
              :label="$t('validation.attributes.no_of_students')"
              label-for="no_of_students"
              horizontal
              :label-cols="2"
              :feedback="feedback('no_of_students')"
            >
              <b-form-input
                id="no_of_students"
                name="no_of_students"
                required
                :placeholder="$t('validation.attributes.no_of_students')"
                v-model="model.no_of_students"
                :state="state('no_of_students')"
              ></b-form-input>
            </b-form-group>

            <b-form-group
              :label="$t('validation.attributes.no_of_teachers')"
              label-for="no_of_teachers"
              horizontal
              :label-cols="2"
              :feedback="feedback('no_of_teachers')"
            >
              <b-form-input
                id="no_of_teachers"
                name="no_of_teachers"
                required
                :placeholder="$t('validation.attributes.no_of_teachers')"
                v-model="model.no_of_teachers"
                :state="state('no_of_teachers')"
              ></b-form-input>
            </b-form-group>

            <b-form-group
              :label="$t('validation.attributes.no_of_classrooms')"
              label-for="no_of_classrooms"
              horizontal
              :label-cols="2"
              :feedback="feedback('no_of_classrooms')"
            >
              <b-form-input
                id="no_of_classrooms"
                name="no_of_classrooms"
                required
                :placeholder="$t('validation.attributes.no_of_classrooms')"
                v-model="model.no_of_classrooms"
                :state="state('no_of_classrooms')"
              ></b-form-input>
            </b-form-group>

            <b-form-group
              :label="$t('validation.attributes.address')"
              label-for="address"
              horizontal
              :label-cols="2"
              :feedback="feedback('address')"
            >
              <b-form-input
                id="address"
                name="address"
                required
                :placeholder="$t('validation.attributes.address')"
                v-model="model.address"
                :state="state('address')"
              ></b-form-input>
            </b-form-group>

            <b-form-group
              :label="$t('validation.attributes.contact_no')"
              label-for="contact_no"
              horizontal
              :label-cols="2"
              :feedback="feedback('contact_no')"
            >
              <b-form-input
                id="contact_no"
                name="contact_no"
                required
                :placeholder="$t('validation.attributes.contact_no')"
                v-model="model.contact_no"
                :state="state('contact_no')"
              ></b-form-input>
            </b-form-group>
            <b-form-group
              :label="$t('validation.attributes.schoolLogo')"
              label-for="logo_image"
              horizontal
              :label-cols="2"
              :feedback="feedback('logo_image')"
            >
              <div class="media">
                <b-img-style
                  v-if="model.logo_image_url"
                  :src="model.logo_image_url"
                  :width="120"
                  :height="80"
                  rounded
                  fluid
                  class="mr-2"
                ></b-img-style>

                <div class="media-body">
                  <h6>{{ $t('labels.upload_image') }}</h6>
                  <b-form-file
                    id="logo_image"
                    name="logo_image"
                    ref="logoImageInput"
                    :placeholder="$t('labels.no_file_chosen')"
                    v-model="model.logo_image"
                    :state="state('logo_image')"
                    v-b-tooltip.hover
                    :title="$t('labels.descriptions.allowed_image_types')"
                  ></b-form-file>
                  <a
                    href="#"
                    class="d-block mt-1"
                    v-if="model.has_logo_image || model.logo_image"
                    @click.prevent="deleteLogoImage"
                  >
                    {{ $t('labels.delete_image') }}
                  </a>
                </div>
              </div>
            </b-form-group>
            <b-form-group
              :label="$t('validation.attributes.schoolImage')"
              label-for="featured_image"
              horizontal
              :label-cols="2"
              :feedback="feedback('featured_image')"
            >
              <div class="media">
                <b-img-style
                  v-if="model.featured_image_url"
                  :src="model.featured_image_url"
                  :width="120"
                  :height="80"
                  rounded
                  fluid
                  class="mr-2"
                ></b-img-style>

                <div class="media-body">
                  <h6>{{ $t('labels.upload_image') }}</h6>
                  <b-form-file
                    id="featured_image"
                    name="featured_image"
                    ref="featuredImageInput"
                    :placeholder="$t('labels.no_file_chosen')"
                    v-model="model.featured_image"
                    :state="state('featured_image')"
                    v-b-tooltip.hover
                    :title="$t('labels.descriptions.allowed_image_types')"
                  ></b-form-file>
                  <a
                    href="#"
                    class="d-block mt-1"
                    v-if="model.has_featured_image || model.featured_image"
                    @click.prevent="deleteFeaturedImage"
                  >
                    {{ $t('labels.delete_image') }}
                  </a>
                </div>
              </div>
            </b-form-group>

            <b-row slot="footer">
              <b-col md>
                <b-button to="/posts" exact variant="danger" size="sm">
                  {{ $t('buttons.back') }}
                </b-button>
              </b-col>
              <b-col>
                <b-button
                  type="submit"
                  variant="success"
                  size="sm"
                  class="float-right"
                  :disabled="pending"
                  v-if="isNew || this.$app.user.can('edit schools')"
                >
                  {{ isNew ? $t('buttons.create') : $t('buttons.edit') }}
                </b-button>
              </b-col>
            </b-row>
          </b-card>
        </b-col>
      </b-row>
    </form>
  </div>
</template>

<script>
import axios from 'axios'
import form from '../mixins/form'

export default {
  name: 'SchoolForm',
  mixins: [form],
  data() {
    return {
      config: {
        wrap: true,
        time_24hr: true,
        enableTime: true
      },
      modelName: 'school',
      resourceRoute: 'schools',
      listPath: '/schools',
      tags: [],
      model: {
        school_name: null,
        school_id: null,
        district: null,
        principal_name: null,
        no_of_students: null,
        no_of_teachers: null,
        no_of_classrooms: null,
        address: null,
        contact_no: null,
        featured_image: null,
        featured_image_url: null,
        has_featured_image: false,
        logo_image: null,
        logo_image_url: null,
        has_logo_image: false
      }
    }
  },
  methods: {
    async getTags(search) {
      let { data } = await axios.get(this.$app.route('admin.tags.search'), {
        params: {
          q: search
        }
      })

      this.tags = data.items
    },
    deleteFeaturedImage() {
      this.$refs.featuredImageInput.reset()
      this.model.featured_image_url = null
      this.model.has_featured_image = false
    },
    deleteLogoImage() {
      this.$refs.logoImageInput.reset()
      this.model.logo_image_url = null
      this.model.has_logo_image = false
    }
  }
}
</script>
