import Vue from 'vue'

const defaultBackgroundColor = '#86bbff'

export const AnnoyingBackground {

  bind(el, binding, vnode) {

    const color = binding.expression || defaultBackgroundColor

    if (el) {

      el.style.backgroundColor = color
      
    }
  }
}

Vue.directive('annoying-background', AnnoyingBackground)
