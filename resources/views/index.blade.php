<x-layouts.app>
    <div x-data="{ active: 1, items: [{ id: 1, title: 'Question #1' }, { id: 2, title: 'Question #2' } ] }" class="space-y-4">
        <template x-for="{ id, title } in items" :key="id">
            <div x-data="{

                    get expanded() {
                        return this.active === this.id
                    },
                    set expanded(value) {
                        this.active = value ? this.id : null
                    }
                }"
                role="region"
                class="border border-black"
            >
                <h2>
                    <button
                        @click="expanded = ! expanded"
                        :aria-expanded="expanded"
                        class="flex items-center justify-between w-full font-bold text-xl px-6 py-3 focus:outline-none"
                    >
                        <span x-text="title"></span>
                        <span x-show="expanded" aria-hidden="true" class="ml-4">&minus;</span>
                        <span x-show="! expanded" aria-hidden="true" class="ml-4">&plus;</span>
                    </button>
                </h2>

                <div x-show="expanded" x-collapse.duration.500ms>
                     <div class="pb-4 px-6">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Delectus
                        exercitationem labore quos similique temporibus. Ea nobis
                        obcaecati
                        possimus quasi quis?
                     </div>
                </div>
            </div>
        </template>
    </div>
</x-layouts.app>
